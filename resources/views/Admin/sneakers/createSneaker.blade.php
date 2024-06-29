@extends('Admin.block.master')

@section('title')
    Thêm mới sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thêm mới sản phẩm</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="col-md-12 mt-3">
                                <label for="inputEmail4" class="form-label">Hình ảnh</label>
                                <input type="file" class="form-control" name="image[]" id="inputImage" multiple
                                    accept="image/*">
                            </div>
                            <div class="col-md-12 mt-3">
                                <div id="imagePreview"></div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="productName" id="productName"
                                    placeholder="Nhập tên sản phẩm...">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="productPrice" class="form-label">Giá sản phẩm</label>
                                <input type="number" class="form-control" id="productPrice"
                                    placeholder="Nhập giá sản phẩm...">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="productCategories" class="form-label">Loại sản phẩm</label>
                                <select id="productCategories" class="form-select">
                                    <option disabled selected>-- Chọn loại sản phẩm --</option>
                                    @if ($listCategories->toArray())
                                        @foreach ($listCategories as $cate)
                                            <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="productDescribe" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="productDescribe" id="productDescribe" placeholder="Nhập mô tả sản phẩm..." class="form-control"
                                    cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12 mt-3" id="listVariant">
                                <label for="productSize" class="form-label">Nhập kích thước và số lượng sản phẩm</label>
                                <div class="variant d-flex flex-wrap">
                                    <div class="mb-3 w-25" style="margin-right: 18px;">
                                        <input type="number" name="productSize[]" class="form-control"
                                            placeholder="Nhập kích thước sản phẩm...">
                                    </div>
                                    <div class="mb-3 w-25" style="margin-right: 18px;">
                                        <input type="number" name="productQuantity[]" class="form-control"
                                            placeholder="Nhập số lượng sản phẩm...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-start">
                                    <a href="/admin/sneaker/" class="btn btn-outline-danger">Quay lại</a>
                                    <button type="button" class="btn btn-outline-success addVariant">Thêm phân
                                        loại</button>
                                    <button type="button" id="btnAddProduct" class="btn btn-primary">Thêm sản phẩm</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-none code-view">
                            <pre class="language-markup" style="height: 375px;">
                                <code>&lt;form action=&quot;javascript:void(0);&quot; class=&quot;row g-3&quot;&gt;
                                &lt;div class=&quot;col-md-12&quot;&gt;
                                &lt;label for=&quot;fullnameInput&quot; class=&quot;form-label&quot;&gt;Name&lt;/label&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;fullnameInput&quot; placeholder=&quot;Enter your name&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; placeholder=&quot;Email&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; placeholder=&quot;Password&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-12&quot;&gt;
                                &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-12&quot;&gt;
                                &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-md-6&quot;&gt;
                                &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot; placeholder=&quot;Enter your city&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-md-4&quot;&gt;
                                &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
                                &lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
                                &lt;option selected&gt;Choose...&lt;/option&gt;
                                &lt;option&gt;...&lt;/option&gt;
                                &lt;/select&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-md-2&quot;&gt;
                                &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot; placeholder=&quot;Zin code&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-12&quot;&gt;
                                &lt;div class=&quot;form-check&quot;&gt;
                                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck&quot;&gt;
                                &lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck&quot;&gt;
                                Check me out
                                &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-12&quot;&gt;
                                &lt;div class=&quot;text-end&quot;&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/form&gt;</code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection

@section('script')
    <script>

        if (CKEDITOR.instances.productDescribe) {
            CKEDITOR.instances.productDescribe.destroy(true);
        }
        CKEDITOR.replace('productDescribe');
        
        document.addEventListener('DOMContentLoaded', function() {
            let btnAddProduct = document.querySelector('#btnAddProduct');

            btnAddProduct.addEventListener('click', function(e) {
                var productName = document.querySelector('#productName');
                var productPrice = document.querySelector('#productPrice');
                var productCategories = document.querySelector('#productCategories');

                var productSizes = document.querySelectorAll('input[name="productSize[]"]');
                var productQuantities = document.querySelectorAll('input[name="productQuantity[]"]');

                var formData = new FormData();

                formData.append('productName', productName.value);
                formData.append('productPrice', productPrice.value);
                formData.append('productCategories', productCategories.value);

                if (CKEDITOR.instances.productDescribe) {
                    var productDescribeData = CKEDITOR.instances.productDescribe.getData();
                    formData.append('productDescribe', productDescribeData);
                } else {
                    console.error('CKEditor instance not found for #productDescribe');
                }

                formData.append('_token', '{{ csrf_token() }}');

                productSizes.forEach(function(size, index) {
                    formData.append('productSize[]', size.value);
                    formData.append('productQuantity[]', productQuantities[index].value);
                });

                var files = document.querySelector('#inputImage').files;

                for (var i = 0; i < files.length; i++) {
                    formData.append('images[]', files[i]);
                }

                $.ajax({
                    url: "{{ route('sneaker.storeSneaker') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        if (response.successProduct) {
                            let boxImgs = document.querySelectorAll('#imagePreview > .box_img');

                            productName.value = "";
                            productPrice.value = "";
                            productDescribe.value = "";
                            productCategories.selectedIndex = 0;
                            if (CKEDITOR.instances.productDescribe) {
                                CKEDITOR.instances.productDescribe.setData('');
                            }
                            document.querySelector('#inputImage').value = "";

                            boxImgs.forEach(item => {
                                item.remove();
                            })

                            productSizes.forEach(function(size) {
                                size.value = "";
                            });
                            productQuantities.forEach(function(quantity) {
                                quantity.value = "";
                            });

                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: `Thêm mới sản phẩm thành công`,
                                showConfirmButton: false,
                                timer: 2500
                            });
                        } else {
                            if(response.errorStoreProduct) {
                                Swal.fire({
                                    position: "top-end",
                                    icon: "warning",
                                    title: `Lỗi khi thêm dữ liệu`,
                                    showConfirmButton: false,
                                    timer: 2500
                                });
                            }
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        Swal.fire({
                            position: "top-end",
                            icon: "error",
                            title: `Lỗi không thể thêm`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });
        });
    </script>
@endsection
