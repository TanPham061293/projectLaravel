<?php
//$linkSave = "index.php?com=seopage&act=save&type=".$_GET['type'];
?>
@extends('admin.templates.layout.layout')
<!-- Content Header -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Quản lý Seo page</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form method="post" action="index.php?com=seopage&act=save&type=tin-tuc" enctype="multipart/form-data">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin SEO page - Tin tức - Sự kiện</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="change-photo" for="file">
                                <p>Upload hình ảnh:</p>
                                <div class="rounded">
                                    <img class="rounded img-upload"
                                        src="../thumbs/300x200x1/<br />
<b>Notice</b>:  Trying to access array offset on value of type bool in <b>/Applications/XAMPP/xamppfiles/htdocs/caphemocnauedit/admin/templates/seopage/man/item_add_tpl.php</b> on line <b>32</b><br />
upload/seopage/"
                                        onerror="src='assets/images/noimage.png'" alt="Alt Photo" />
                                    <strong>
                                        <b class="text-sm text-split"></b>
                                        <span class="btn btn-sm bg-gradient-success"><i class="fas fa-camera mr-2"></i>Chọn
                                            hình</span>
                                    </strong>
                                </div>
                            </label>
                            <strong class="d-block mt-2 mb-2 text-sm">Width: 300 px - Height: 200 px
                                (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</strong>
                            <div class="custom-file my-custom-file d-none">
                                <input type="file" class="custom-file-input" name="file" id="file">
                                <label class="custom-file-label" for="file">Chọn file</label>
                            </div>
                        </div>
                        <!-- SEO -->
                        <div class="card-seo">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                href="#tabs-seolang-vi" role="tab" aria-controls="tabs-seolang-vi"
                                                aria-selected="true">SEO (Tiếng Việt)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                        <div class="tab-pane fade show active" id="tabs-seolang-vi" role="tabpanel"
                                            aria-labelledby="tabs-lang">
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="titlevi">SEO Title (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo title-seo"
                                                    name="dataSeo[titlevi]" id="titlevi" placeholder="SEO Title (vi)"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="dataSeo[keywordsvi]" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)" value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>0</span>/320 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                    maxlength="320" rows="5" placeholder="SEO Description (vi)"></textarea>
                                            </div>

                                            <!-- SEO preview -->
                                            <div
                                                class="form-group form-group-seo-preview callout callout-warning mb-0 d-none">
                                                <label class="label-seo-preview"><i class="fas fa-info mr-2"></i>Khi lên
                                                    top, page này sẽ hiển thị theo dạng mẫu như sau:</label>
                                                <div class="seo-preview">
                                                    <p class="slug-seo-preview" id="seourlpreviewvi" data-seourlstatic="0">
                                                        http://localhost/caphemocnauedit/<strong>tin-tuc</strong></p>
                                                    <p class="title-seo-preview text-split" id="title-seo-previewvi">Title
                                                    </p>
                                                    <p class="description-seo-preview text-split"
                                                        id="description-seo-previewvi">Description</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="seo-create" value="vi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-sm">
                    <button type="submit" class="btn btn-sm bg-gradient-primary"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
            </form>
        </section>
    </div>
@endsection
