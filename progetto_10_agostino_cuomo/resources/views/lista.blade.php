<x-pagina>
    <div class=" d-flex flex-row  flex-wrap justify-content-between border border-warning-subtle m-5 col-10">
@foreach ($descriptions as $description)
    

        <div class="card " style="width: 18rem;">
            <img src="{{Storage::url($description->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$description->email}}</h5>
              <p class="card-text">{{$description->recensione}}</p>
            </div>
        </div>
@endforeach
              
          </div>
    
</x-pagina>