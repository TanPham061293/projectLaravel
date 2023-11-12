<?php

// $linkMan = "index.php?com=newsletter&act=man&type=".$type."&p=".$curPage;

// $linkAdd = "index.php?com=newsletter&act=add&type=".$type."&p=".$curPage;

// $linkEdit = "index.php?com=newsletter&act=edit&type=".$type."&p=".$curPage;

// $linkDelete = "index.php?com=newsletter&act=delete&type=".$type."&p=".$curPage;
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

                        <li class="breadcrumb-item active">Quản lý nhận tin</li>

                    </ol>

                </div>

            </div>

        </section>



        <!-- Main content -->

        <section class="content">

            <div class="card-footer text-sm sticky-top">


                <a class="btn btn-sm bg-gradient-success text-white" id="send-email" title="Gửi email"><i
                        class="fas fa-paper-plane mr-2"></i>Gửi email</a>


                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=newsletter&act=add&type=dangkybaogia&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>

                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=newsletter&act=delete&type=dangkybaogia&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>

                <div class="form-inline form-search d-inline-block align-middle ml-3">

                    <div class="input-group input-group-sm">

                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=newsletter&act=man&type=dangkybaogia&p=1')">

                        <div class="input-group-append bg-primary rounded-right">

                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=newsletter&act=man&type=dangkybaogia&p=1')">

                                <i class="fas fa-search"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card card-primary card-outline text-sm mb-0">

                <div class="card-header">

                    <h3 class="card-title">Danh sách Đăng ký báo giá</h3>


                    <p class="d-block text-secondary w-100 float-left mb-0 mt-1">Chọn email sau đó kéo xuống dưới cùng danh
                        sách này để có thể thiết lập nội dung email muốn gửi đi.</p>


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


                                <th class="align-middle">Họ tên</th>



                                <th class="align-middle">Email</th>



                                <th class="align-middle">Điện thoại</th>



                                <th class="align-middle">Download</th>



                                <th class="align-middle">Ngày tạo</th>



                                <th class="align-middle">Tình trạng</th>


                                <th class="align-middle text-center">Thao tác</th>

                            </tr>

                        </thead>


                        <tbody>


                            <tr>

                                <td class="align-middle">

                                    <div class="custom-control custom-checkbox my-checkbox">

                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-72" value="72">

                                        <label for="select-checkbox-72" class="custom-control-label"></label>

                                    </div>

                                </td>

                                <td class="align-middle">

                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="0" data-id="72" data-table="newsletter">

                                </td>


                                <td class="align-middle">

                                    <a class="text-dark"
                                        href="index.php?com=newsletter&act=edit&type=dangkybaogia&p=1&id=72"
                                        title="PHẠM DUY TÂN">PHẠM DUY TÂN</a>

                                </td>



                                <td class="align-middle">

                                    <a class="text-dark"
                                        href="index.php?com=newsletter&act=edit&type=dangkybaogia&p=1&id=72"
                                        title="123@gmail.com">123@gmail.com</a>

                                </td>



                                <td class="align-middle">0333434738</td>



                                <td class="align-middle">


                                    <a class="bg-gradient-secondary text-white d-inline-block p-1 rounded" href="#"
                                        title="Tập tin trống"><i class="fas fa-download mr-2"></i>Tập tin trống</a>


                                </td>



                                <td class="align-middle">03:51:28 PM - 27/10/2023</td>



                                <td class="align-middle">Đang chờ duyệt...</td>


                                <td class="align-middle text-center text-md text-nowrap">

                                    <a class="text-primary mr-2"
                                        href="index.php?com=newsletter&act=edit&type=dangkybaogia&p=1&id=72"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>

                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=newsletter&act=delete&type=dangkybaogia&p=1&id=72"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>

                                </td>

                            </tr>


                        </tbody>


                    </table>

                </div>

            </div>



            <div class="card-footer text-sm">


                <a class="btn btn-sm bg-gradient-success text-white" id="send-email" title="Gửi email"><i
                        class="fas fa-paper-plane mr-2"></i>Gửi email</a>


                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=newsletter&act=add&type=dangkybaogia&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>

                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=newsletter&act=delete&type=dangkybaogia&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>

            </div>

        </section>
    </div>
@endsection
