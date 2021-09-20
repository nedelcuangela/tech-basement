/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/chat.js ***!
  \******************************/
$(document).ready(function () {
  $(function () {
    var pusher = new Pusher($("#pusher_app_key").val(), {
      cluster: $("#pusher_cluster").val(),
      encrypted: true
    });
    var channel = pusher.subscribe('chat');
    $(".chat-toggle").on("click", function (e) {
      e.preventDefault();
      var ele = $(this);
      var user_id = ele.attr("data-id");
      var username = ele.attr("data-user");
      cloneChatBox(user_id, username, function () {
        var chatBox = $("#chat_box_" + user_id);

        if (!chatBox.hasClass("chat-opened")) {
          chatBox.addClass("chat-opened").slideDown("fast");
          loadLatestMessages(chatBox, user_id);
          chatBox.find(".chat-area").animate({
            scrollTop: chatBox.find(".chat-area").offset().top + chatBox.find(".chat-area").outerHeight(true)
          }, 800, 'swing');
        }
      });
    }); // on close chat close the chat box but don't remove it from the dom

    $(".close-chat").on("click", function (e) {
      $(this).parents("div.chat-opened").removeClass("chat-opened").slideUp("fast");
    });
    $(".chat_input").on("change keyup", function (e) {
      if ($(this).val() != "") {
        $(this).parents(".form-controls").find(".btn-chat").prop("disabled", false);
      } else {
        $(this).parents(".form-controls").find(".btn-chat").prop("disabled", true);
      }
    }); // on click the btn send the message

    $(".btn-chat").on("click", function (e) {
      send($(this).attr('data-to-user'), $("#chat_box_" + $(this).attr('data-to-user')).find(".chat_input").val());
    }); // listen for the send event, this event will be triggered on click the send btn

    channel.bind('send', function (data) {
      displayMessage(data.data);
    });
    $(".chat-area").on("scroll", function (e) {
      var st = $(this).scrollTop();

      if (st < lastScrollTop) {
        fetchOldMessages($(this).parents(".chat-opened").find("#to_user_id").val(), $(this).find(".msg_container:first-child").attr("data-message-id"));
      }

      lastScrollTop = st;
    }); // listen for the oldMsgs event, this event will be triggered on scroll top

    channel.bind('oldMsgs', function (data) {
      displayOldMessages(data);
    });
  });
  /**
   * loaderHtml
   *
   * @returns {string}
   */

  function loaderHtml() {
    return '<i class="glyphicon glyphicon-refresh loader"></i>';
  }
  /**
   * getMessageSenderHtml
   *
   * this is the message template for the sender
   *
   * @param message
   * @returns {string}
   */


  function getMessageSenderHtml(message) {
    return "\n           <div class=\"row msg_container base_sent\" data-message-id=\"".concat(message.id, "\">\n        <div class=\"col-md-10 col-xs-10\">\n            <div class=\"messages msg_sent text-right\">\n                <p>").concat(message.content, "</p>\n                <time datetime=\"").concat(message.dateTimeStr, "\"> ").concat(message.fromUserName, " \u2022 ").concat(message.dateHumanReadable, " </time>\n            </div>\n        </div>\n        <div class=\"col-md-2 col-xs-2 avatar\">\n            <img src=\"") + base_url + '/storage/uploads/user-avatar.png' + "\" width=\"50\" height=\"50\" class=\"img-responsive\">\n        </div>\n    </div>\n    ";
  }
  /**
   * getMessageReceiverHtml
   *
   * this is the message template for the receiver
   *
   * @param message
   * @returns {string}
   */


  function getMessageReceiverHtml(message) {
    return "\n           <div class=\"row msg_container base_receive\" data-message-id=\"".concat(message.id, "\">\n           <div class=\"col-md-2 col-xs-2 avatar\">\n             <img src=\"") + base_url + '/storage/uploads/user-avatar.png' + "\" width=\"50\" height=\"50\" class=\"img-responsive\">\n           </div>\n        <div class=\"col-md-10 col-xs-10\">\n            <div class=\"messages msg_receive text-left\">\n                <p>".concat(message.content, "</p>\n                <time datetime=\"").concat(message.dateTimeStr, "\"> ").concat(message.fromUserName, "  \u2022 ").concat(message.dateHumanReadable, " </time>\n            </div>\n        </div>\n    </div>\n    ");
  }
  /**
   * cloneChatBox
   *
   * this helper function make a copy of the html chat box depending on receiver user
   * then append it to 'chat-overlay' div
   *
   * @param user_id
   * @param username
   * @param callback
   */


  function cloneChatBox(user_id, username, callback) {
    if ($("#chat_box_" + user_id).length == 0) {
      var cloned = $("#chat_box").clone(true); // change cloned box id

      cloned.attr("id", "chat_box_" + user_id);
      cloned.find(".chat-user").text(username);
      cloned.find(".btn-chat").attr("data-to-user", user_id);
      cloned.find("#to_user_id").val(user_id);
      $("#chat-overlay").append(cloned);
    }

    callback();
  }
  /**
   * loadLatestMessages
   *
   * this function called on load to fetch the latest messages
   *
   * @param container
   * @param user_id
   */


  function loadLatestMessages(container, user_id) {
    var chat_area = container.find(".chat-area");
    chat_area.html("");
    $.ajax({
      url: base_url + "/load-latest-messages",
      data: {
        user_id: user_id,
        _token: $("meta[name='csrf-token']").attr("content")
      },
      method: "GET",
      dataType: "json",
      beforeSend: function beforeSend() {
        if (chat_area.find(".loader").length == 0) {
          chat_area.html(loaderHtml());
        }
      },
      success: function success(response) {
        if (response.state == 1) {
          response.messages.map(function (val, index) {
            $(val).appendTo(chat_area);
          });
        }
      },
      complete: function complete() {
        chat_area.find(".loader").remove();
      }
    });
  }

  function send(to_user, message) {
    var chat_box = $("#chat_box_" + to_user);
    var chat_area = chat_box.find(".chat-area");
    $.ajax({
      url: base_url + "/send",
      data: {
        to_user: to_user,
        message: message,
        _token: $("meta[name='csrf-token']").attr("content")
      },
      method: "POST",
      dataType: "json",
      beforeSend: function beforeSend() {
        if (chat_area.find(".loader").length == 0) {
          chat_area.append(loaderHtml());
        }
      },
      success: function success(response) {},
      complete: function complete() {
        chat_area.find(".loader").remove();
        chat_box.find(".btn-chat").prop("disabled", true);
        chat_box.find(".chat_input").val("");
        chat_area.animate({
          scrollTop: chat_area.offset().top + chat_area.outerHeight(true)
        }, 800, 'swing');
      }
    });
  }
  /**
   * This function called by the send event triggered from pusher to display the message
   *
   * @param message
   */


  function displayMessage(message) {
    var alert_sound = document.getElementById("chat-alert-sound");

    if ($("#current_user").val() == message.from_user_id) {
      var messageLine = getMessageSenderHtml(message);
      $("#chat_box_" + message.to_user_id).find(".chat-area").append(messageLine);
    } else if ($("#current_user").val() == message.to_user_id) {
      alert_sound.play(); // for the receiver user check if the chat box is already opened otherwise open it

      cloneChatBox(message.from_user_id, message.fromUserName, function () {
        var chatBox = $("#chat_box_" + message.from_user_id);

        if (!chatBox.hasClass("chat-opened")) {
          chatBox.addClass("chat-opened").slideDown("fast");
          loadLatestMessages(chatBox, message.from_user_id);
          chatBox.find(".chat-area").animate({
            scrollTop: chatBox.find(".chat-area").offset().top + chatBox.find(".chat-area").outerHeight(true)
          }, 800, 'swing');
        } else {
          var _messageLine = getMessageReceiverHtml(message); // append the message for the receiver user


          $("#chat_box_" + message.from_user_id).find(".chat-area").append(_messageLine);
        }
      });
    }
  }

  function fetchOldMessages(to_user, old_message_id) {
    var chat_box = $("#chat_box_" + to_user);
    var chat_area = chat_box.find(".chat-area");
    $.ajax({
      url: base_url + "/fetch-old-messages",
      data: {
        to_user: to_user,
        old_message_id: old_message_id,
        _token: $("meta[name='csrf-token']").attr("content")
      },
      method: "GET",
      dataType: "json",
      beforeSend: function beforeSend() {
        if (chat_area.find(".loader").length == 0) {
          chat_area.prepend(loaderHtml());
        }
      },
      success: function success(response) {},
      complete: function complete() {
        chat_area.find(".loader").remove();
      }
    });
  }

  function displayOldMessages(data) {
    if (data.data.length > 0) {
      data.data.map(function (val, index) {
        $("#chat_box_" + data.to_user).find(".chat-area").prepend(val);
      });
    }
  }
});
/******/ })()
;