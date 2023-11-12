<?php
// $linkView = $config_base;
// $linkMan = $linkFilter = "index.php?com=news&act=man&type=".$type."&p=".$curPage;
// $linkAdd = "index.php?com=news&act=add&type=".$type."&p=".$curPage;
// $linkCopy = "index.php?com=news&act=copy&type=".$type."&p=".$curPage;
// $linkEdit = "index.php?com=news&act=edit&type=".$type."&p=".$curPage;
// $linkDelete = "index.php?com=news&act=delete&type=".$type."&p=".$curPage;
// $linkMulti = "index.php?com=news&act=man_photo&kind=man&type=".$type."&p=".$curPage;
// $copyImg = (isset($config['news'][$type]['copy_image']) && $config['news'][$type]['copy_image'] == true) ? TRUE : FALSE;
?>
<!-- Content Header -->
@extends('admin.templates.layout.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Quản lý Tin tức - Sự kiện</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white" href="index.php?com=news&act=add&type=tin-tuc&p=1"
                    title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tin-tuc&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=news&act=man&type=tin-tuc&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=news&act=man&type=tin-tuc&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer form-group-category text-sm bg-light row">
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title">Danh sách Tin tức - Sự kiện</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle" width="5%">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                        <label for="selectall-checkbox" class="custom-control-label"></label>
                                    </div>
                                </th>
                                <th class="align-middle text-center" width="10%">STT</th>
                                <th class="align-middle">Hình</th>
                                <th class="align-middle" style="width:30%">Tiêu đề</th>
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-64" value="64">
                                        <label for="select-checkbox-64" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="64" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=64"
                                        title="BẢO VỆ CHUYÊN NGHIỆP"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/news/img-news-1557.png"
                                            alt="BẢO VỆ CHUYÊN NGHIỆP"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=64"
                                        title="BẢO VỆ CHUYÊN NGHIỆP">BẢO VỆ CHUYÊN NGHIỆP</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="http://localhost/caphemocnauedit/bao-ve-chuyen-nghiep" target="_blank"
                                            title="BẢO VỆ CHUYÊN NGHIỆP"><i class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=64"
                                            title="BẢO VỆ CHUYÊN NGHIỆP"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="64"
                                                        data-table="news" data-copyimg="1"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id_copy=64"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=64"
                                            title="BẢO VỆ CHUYÊN NGHIỆP"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-64" data-table="news" data-id="64" data-loai="hienthi"
                                            checked>
                                        <label for="show-checkbox-64" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="64"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép
                                                    ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id=64"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa
                                                    thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=64"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=64"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-63" value="63">
                                        <label for="select-checkbox-63" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="63" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=63"
                                        title="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/news/6e909d67a96a57340e7b-9679.jpg"
                                            alt="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=63"
                                        title="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG">BẢO VỆ QUÁN BAR - VŨ TRƯỜNG</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="http://localhost/caphemocnauedit/bao-ve-quan-bar-vu-truong"
                                            target="_blank" title="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=63"
                                            title="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="63"
                                                        data-table="news" data-copyimg="1"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id_copy=63"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=63"
                                            title="BẢO VỆ QUÁN BAR - VŨ TRƯỜNG"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-63" data-table="news" data-id="63" data-loai="hienthi"
                                            checked>
                                        <label for="show-checkbox-63" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="63"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép
                                                    ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id=63"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa
                                                    thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=63"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=63"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-62" value="62">
                                        <label for="select-checkbox-62" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="62" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=62"
                                        title="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/news/img-news1-1138.png"
                                            alt="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=62"
                                        title="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI">DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="http://localhost/caphemocnauedit/dich-vu-bao-ve-tai-cu-chi"
                                            target="_blank" title="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=62"
                                            title="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="62"
                                                        data-table="news" data-copyimg="1"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id_copy=62"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=62"
                                            title="DỊCH VỤ BẢO VỆ TẠỊ CỦ CHI"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-62" data-table="news" data-id="62" data-loai="hienthi"
                                            checked>
                                        <label for="show-checkbox-62" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="62"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép
                                                    ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id=62"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa
                                                    thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=62"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=62"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-61" value="61">
                                        <label for="select-checkbox-61" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="61" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=61"
                                        title="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/news/img-news-5718.png"
                                            alt="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=61"
                                        title="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ">GIẢI PHÁP AN NINH TRONG LỈNH VỰC
                                        BẢO VỆ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="http://localhost/caphemocnauedit/giai-phap-an-ninh-trong-linh-vuc-bao-ve"
                                            target="_blank" title="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=61"
                                            title="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="61"
                                                        data-table="news" data-copyimg="1"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id_copy=61"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=61"
                                            title="GIẢI PHÁP AN NINH TRONG LỈNH VỰC BẢO VỆ"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-61" data-table="news" data-id="61" data-loai="hienthi"
                                            checked>
                                        <label for="show-checkbox-61" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="61"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép
                                                    ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=7&id=61"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa
                                                    thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=7&id=61"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=7&id=61"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white" href="index.php?com=news&act=add&type=tin-tuc&p=1"
                    title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tin-tuc&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
@endsection
