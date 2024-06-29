@extends('Admin.block.master')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Chi tiết của sản phẩm: {{ $productDetail->product_name }}
                        </h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="bordered-tables-showcode" class="form-label text-muted">Show Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="bordered-tables-showcode">
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <td scope="col">{{ $productDetail->product_id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Ảnh sản phẩm</th>
                                            <td scope="col">
                                                <div class="d-flex">
                                                    @foreach (explode(',', $productDetail->image) as $image)
                                                        <img width="100px" class="m-1" src="{{ $image }}"
                                                            alt="{{ $image }}">
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Tên sản phẩm</th>
                                            <td scope="col">{{ $productDetail->product_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Giá sản phẩm</th>
                                            <td scope="col">{{ number_format($productDetail->price, 0, ',', '.') }} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phân loại sản phẩm</th>
                                            <td scope="col">
                                                @foreach ($variants as $variant)
                                                    <div class="d-flex align-items-center border p-2">
                                                        <div class="m-1">
                                                            Size: {{ $variant->size }}
                                                        </div>
                                                        <span>-</span>
                                                        <div class="m-1">
                                                            Số lượng: {{ $variant->quantity }}
                                                        </div>
                                                        <span>-</span>
                                                        <div class="m-1">
                                                            Trạng thái: <span class="badge bg-{{ $variant->status === 0 ? 'success' : 'danger' }}">{{ $variant->status === 0 ? 'Còn hàng' : 'Hết hàng' }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Slug sản phẩm</th>
                                            <td scope="col">{{ $productDetail->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mô tả</th>
                                            <td scope="col">{!! $productDetail->describe !!}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Danh mục</th>
                                            <td scope="col">{{ $categories->category_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Ngày đăng</th>
                                            <td scope="col">
                                                {{ date('d-m-Y | H:i:s', strtotime($productDetail->created_at)) }}</td>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="col-12 mt-3">
                                    <div class="text-start">
                                        <a href="/admin/sneaker/" class="btn btn-outline-danger">Quay lại</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none code-view">
                            <pre class="language-markup" style="height: 275px;">
                                <code>
                                    &lt;!-- Bordered Tables --&gt;
                                    &lt;table class=&quot;table table-bordered table-nowrap&quot;&gt;
                                    &lt;thead&gt;
                                    &lt;tr&gt;
                                    &lt;th scope=&quot;col&quot;&gt;Id&lt;/th&gt;
                                    &lt;th scope=&quot;col&quot;&gt;Title&lt;/th&gt;
                                    &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                                    &lt;th scope=&quot;col&quot;&gt;Assignee&lt;/th&gt;
                                    &lt;th scope=&quot;col&quot;&gt;Price&lt;/th&gt;
                                    &lt;th scope=&quot;col&quot;&gt;&lt;/th&gt;
                                    &lt;/tr&gt;
                                    &lt;/thead&gt;
                                    &lt;tbody&gt;
                                    &lt;tr&gt;
                                    &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
                                    &lt;td&gt;Implement new UX&lt;/td&gt;
                                    &lt;td&gt;&lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;Backlog&lt;/span&gt;&lt;/td&gt;
                                    &lt;td&gt;Lanora Sandoval&lt;/td&gt;
                                    &lt;td&gt;$4,521&lt;/td&gt;
                                    &lt;td&gt;
                                    &lt;div class=&quot;dropdown&quot;&gt;
                                    &lt;a href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;i class=&quot;ri-more-2-fill&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;

                                    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                    &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
                                    &lt;td&gt;Design syntax&lt;/td&gt;
                                    &lt;td&gt;&lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;In Progress&lt;/span&gt;&lt;/td&gt;
                                    &lt;td&gt;Calvin Garrett&lt;/td&gt;
                                    &lt;td&gt;$7,546&lt;/td&gt;
                                    &lt;td&gt;
                                    &lt;div class=&quot;dropdown&quot;&gt;
                                    &lt;a href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;i class=&quot;ri-more-2-fill&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;

                                    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                    &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
                                    &lt;td&gt;Configurable resources&lt;/td&gt;
                                    &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Done&lt;/span&gt;&lt;/td&gt;
                                    &lt;td&gt;Florence Guzman&lt;/td&gt;
                                    &lt;td&gt;$1,350&lt;/td&gt;
                                    &lt;td&gt;
                                    &lt;div class=&quot;dropdown&quot;&gt;
                                    &lt;a href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;i class=&quot;ri-more-2-fill&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;

                                    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                    &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
                                    &lt;td&gt;Implement extensions&lt;/td&gt;
                                    &lt;td&gt;&lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;In Progress&lt;/span&gt;&lt;/td&gt;
                                    &lt;td&gt;Maritza Blanda&lt;/td&gt;
                                    &lt;td&gt;$4,521&lt;/td&gt;
                                    &lt;td&gt;
                                    &lt;div class=&quot;dropdown&quot;&gt;
                                    &lt;a href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                                    &lt;i class=&quot;ri-more-2-fill&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;

                                    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;/div&gt;
                                    &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;/tbody&gt;
                                    &lt;/table&gt;
                                </code>
                            </pre>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection


@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let btnDels = document.querySelectorAll('.btnDel');
            let formData = new FormData(); // Khai báo formData

            btnDels.forEach(btnDel => {
                btnDel.addEventListener('click', function() {
                    let categoryId = this.dataset.categoryId;
                    formData.append('_token', '{{ csrf_token() }}');

                    let urlDelete = `/admin/categories/delete/${categoryId}`;

                    $.ajax({
                        url: urlDelete,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.messageDeleteCategories) {
                                let trElement = document.querySelector(
                                    `tr[data-id-tr="${categoryId}"]`);
                                let btnClose = document.querySelector(
                                    `.btnClose${categoryId}`);

                                btnClose.click();
                                trElement.remove();

                                Swal.fire({
                                    position: "top-end",
                                    icon: "success",
                                    title: `Xóa danh mục thành công`,
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
                                title: `Lỗi không thể xóa`,
                                showConfirmButton: false,
                                timer: 2500
                            });
                        }
                    });
                });
            });
        });
    </script>
@endsection
