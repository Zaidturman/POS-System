<div>
    <div class="form-row">
        <div class="col-md-7">
            <div class="form-group">
                <label>{{ trans('public.ProductCategory') }} </label>
                <select wire:model.live="category" class="form-control">
                    <option value="">All Products</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>{{ trans('public.ProductCount') }} </label>
                <select wire:model.live="showCount" class="form-control">
                    <option value="9">9 {{ trans('public.Products') }}</option>
                    <option value="15">15 {{ trans('public.Products') }}</option>
                    <option value="21">21 {{ trans('public.Products') }}</option>
                    <option value="30">30 {{ trans('public.Products') }}</option>
                    <option value="">All {{ trans('public.Products') }}</option>
                </select>
            </div>
        </div>
    </div>
</div>
