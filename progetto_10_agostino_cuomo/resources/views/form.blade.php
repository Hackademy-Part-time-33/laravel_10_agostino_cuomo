<x-pagina>

    <form method="post" action="{{route('invio')}}" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" {{old('value')}}>
          @error('email')
          {{$message}}
     @enderror 
        </div>

        <div class="mb-3">
      
          <label for="recensione" class="form-label">Recensione</label>
          <input type="text" class="form-control"  name="recensione" id="recensione" {{old('value')}}>
          @error('recensione')
          {{$message}}
     @enderror 
        </div>

        <div class="mb-3 form-check">
          
          <input type="checkbox" class="form-check-input" id="exampleCheck1" {{old('value')}}>
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
       
        </div>

        <div class="mb-3 form-check">
          {{-- @error() --}}
          <label class="form-check-label" for="exampleCheck1">Inserisci Copertina</label>
          <input type="file" class="form-label" id="image" name="image" {{old('value')}}>
         
         {{--  @enderror --}}    
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-pagina>