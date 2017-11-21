@extends('main')

@section('title', 'Contact')

@section('content')

<main role="main">  
   <div class="row">
      <div class="col-md-6 mx-auto">
         <div class="card">

            <div class="card-header">
               <div class="text-center">Contact Me</div>
            </div>
            
            <div class="card-body">
            <form>
               <div class="form-group">
               <label class="col-form-label" for="formGroupExampleInput">Email</label>
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
               </div>

               <div class="form-group">
               <label class="col-form-label" for="formGroupExampleInput2">Subject</label>
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
               </div>

               <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <a href="#" class="btn btn-success btn-block">Send Message</a>

            </form>
           </div>
         </div>
         
      </div>
      
   </div> <!-- /row -->

</main> <!-- /main -->

@endsection


