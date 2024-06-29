@extends('Admin.block.master')

@section('title')
    Cập nhật danh mục
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật danh mục</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="col-md-12">
                                <label for="categoryInput" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" value="{{ $categoryById->category_name }}"
                                    name="categoriesName" id="categoryInput" placeholder="Nhập tên danh mục...">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="statusInput" class="form-label">Trạng thái</label><br>
                                <input type="radio" class="btn-check" value="0"
                                    {{ $categoryById->status == 0 ? 'checked' : '' }} name="status" id="statusVisible"
                                    autocomplete="off">
                                <label class="btn btn-outline-success" for="statusVisible">Hiện</label>

                                <input type="radio" class="btn-check" value="1"
                                    {{ $categoryById->status == 1 ? 'checked' : '' }} name="status" id="statusHidden"
                                    autocomplete="off">
                                <label class="btn btn-outline-danger" for="statusHidden">Ẩn</label>
                            </div>
                            <div class="col-12">
                                <div class="text-start">
                                    <button type="button" id="btnUpdateCategories" name="insertCategory"
                                        class="btn btn-primary">Cập nhật danh
                                        mục</button>
                                    <a href="/admin/categories/" class="btn btn-outline-warning">Quay lại</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            let btnUpdateCategories = document.querySelector('#btnUpdateCategories');

            btnUpdateCategories.addEventListener('click', function() {
                let categoryName = document.querySelector('#categoryInput');
                let status = document.querySelector('input[name="status"]:checked');

                let data = {
                    categoriesName: categoryName.value,
                    status: status.value,
                    _token: '{{ csrf_token() }}'
                };

                $.ajax({
                    url: '{{ route("categories.updateCategories", ["categoryId" => $categoryId]) }}',
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        if (response.messageUpdate) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: `Cập nhật danh mục thành công`,
                                showConfirmButton: false,
                                timer: 2500
                            });
                        } else {
                            Swal.fire({
                                position: "top-end",
                                icon: "warning",
                                title: `Đã xảy ra lỗi`,
                                showConfirmButton: false,
                                timer: 2500
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            position: "top-end",
                            icon: "error",
                            title: `Lỗi không thể cập nhật`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });
        });

    </script>
@endsection
