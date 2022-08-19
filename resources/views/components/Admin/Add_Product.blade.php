<div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="mb-4" style="color:#fff">Add New Product</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <form method="POST" id="contactForm" name="contactForm" enctype="multipart/form-data" novalidate="novalidate" action="/Admin/Add_Product">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
        <input class="form-control" name="name" type="text" placeholder="Name"/>
        <input class="form-control" name="price" type="text" placeholder="Price"/>
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
            </div>
        </div>
        </div>

<button class="button-10" role="button">ADD</button>

   
            {{ Session::get('Error') }}
       
    </div>

    
    </form>
</div>    

    