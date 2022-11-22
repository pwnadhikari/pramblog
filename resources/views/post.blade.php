<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <br>
<form method="post">
@csrf 
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title">
    
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description">
        
    </textarea> 
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
