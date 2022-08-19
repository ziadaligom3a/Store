@props(['product' => ''])
<div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="mb-4" style="color:#fff">Add New Product</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <form method="POST" id="contactForm" name="contactForm" enctype="multipart/form-data" novalidate="novalidate" action="/Admin/Edit/{{ $product->id }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">

        <input class="form-control" value="{{ $product->name }}" name="name" type="text" placeholder="Name"/>
        <input class="form-control" value="{{ $product->price }}" name="price" type="text" placeholder="Price"/>
                </div>
            </div>



        <div class="col-md-12">
             <div class="form-group">
                <div class="check">
                    
                    
                    <input type="file" name="img" type="file" />
                    @error('img')
                    <p>{{ $message }}</p>
                    @enderror
            
                </div>
                <div class="flex mt-6">
                    <img   src="/{{ $product->img }}" class="rounded-xl" width="100" alt="">
                </div>
            </div>
        </div>
        </div>

<button class="button-10" role="button">Edit</button>

   
            @dd(Session::get('Error'))
       
    </div>

    
    </form>
</div>    

    