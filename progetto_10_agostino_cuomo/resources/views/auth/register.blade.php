<x-pagina>
  <span class="badge text-bg-warning">Registrati</span></h1>
{{-- <form method="POST" action="{{route('register')}}">
@csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>

  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Conferma</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
<form class="p-5 border rounded" action="{{ route('register') }}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="name" class="form-label">Name
          utente</label>
      <input type="text" name="name" class="form-control" id="name">
      @error('name')
          {{ $message }}
      @enderror
  </div>
  <div class="mb-3">
      <label for="email" class="form-label">Email
          utente</label>
      <input type="email" name="email" class="form-control" id="email">
      @error('name')
          {{ $message }}
      @enderror
  </div>
  <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
      @error('password')
          {{ $message }}
      @enderror
  </div>
  <div class="mb-3">
      <label for="password_confirmation" class="form-label">Conferma Password</label>
      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
      @error('password_confirmation')
          {{ $message }}
      @enderror
  </div>
  <button type="submit" class="btn btn-dark">Registrati</button>
  <a href="{{ route('login') }}" class="btn btn-outline-dark">Sei gia registrato? Clicca qui</a>
</form>
</x-pagina>