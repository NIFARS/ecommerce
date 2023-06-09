<div>
    <div class="container" style="padding:30px 0">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Product
                        </div>
                        <div class="col-md-6">
    <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>

                    @endif
                    <form action="" enctype="multipart/form-data" class="form-horizontal" wire:submit.prevent="updateProduct">
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product Name</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">

                            @error('name') <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product slug</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product slug" class="form-control input-md" wire:model="slug">

                            @error('slug') <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Short Description</label>
                        <div class="col-md-4">
                            <textarea name="" placeholder="Short Description" class="form-control input-md"  wire:model="short_description" id="" cols="30" rows="10"></textarea>

                            @error('short_description') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"> Description</label>
                        <div class="col-md-4">
                            <textarea name="" placeholder="Description" class="form-control input-md" id="" cols="30" rows="10" wire:model="description"></textarea>

                            @error('description') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Regular Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price">

                            @error('regular_price') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Sale Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price">

                            @error('sale_price') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">SKU</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">

                            @error('SKU') <p class="text-danger">{{ $message }}</p>

                            @enderror


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Stoke</label>
                        <div class="col-md-4">
                            <select name="" class="form-control" id="" wire:model="stock_status">
                                <option value="instock">Instock</option>
                                <option value="outofstock">Out Of Stoke</option>
                            </select>

                            @error('stock_status') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Featured</label>
                        <div class="col-md-4">
                            <select name="" class="form-control" id="" wire:model="featured">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Quantity</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity">

                            @error('quantity') <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product Image</label>
                        <div class="col-md-4">
                            <input type="file" placeholder="Product Image" class="input-file" wire:model="newimage">
                            @if ($newimage)
                                <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                            @else
                            <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120" alt="">
                            @endif
                            @error('newimage') <p class="text-danger">{{ $message }}</p>

                            @enderror


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Category</label>
                        <div class="col-md-4">
                            <select name="" class="form-control" id="" wire:model="category_id">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                @endforeach
                            </select>

                            @error('category_id') <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
