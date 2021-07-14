<div class="form-group pb-2">
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ old('name') ?? $users->name}}" class="form-control">

</div>

<label for="email">Email:</label>

<div class="form-group ">

    <input type="text" name="email" value="{{ old('email') ?? $users->email}}" class="form-control" >
</div>

<div class="form-group pb-2">
    <label for="name">Password:</label>
    <input type="password" name="password" value="{{ old('name') ?? $user->password}}" class="form-control">

</div>

<div>{{ $errors->first('name') }}</div>
<div>{{ $errors->first('email') }}</div>
