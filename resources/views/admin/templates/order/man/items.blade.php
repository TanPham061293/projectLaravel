<?php
// $linkMan = $linkFilter = "index.php?com=order&act=man&p=".$curPage;
// $linkEdit = "index.php?com=order&act=edit&p=".$curPage;
// $linkDelete = "index.php?com=order&act=delete&p=".$curPage;
// $linkExcel = "index.php?com=excelAll";
// $linkWord = "index.php?com=wordAll";
// $arrStatus = array("text-primary","text-info","text-warning","text-success","text-danger");
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
                        <li class="breadcrumb-item active">Quản lý đơn hàng</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-shopping-bag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text text-primary font-weight-bold text-capitalize text-sm">Mới đặt</span>
                            <p class="info-box-text text-sm mb-0">Số lượng: <span
                                    class="text-danger font-weight-bold">1</span></p>
                            <p class="info-box-text text-sm mb-0">Tổng giá: <span
                                    class="text-danger font-weight-bold"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text text-info font-weight-bold text-capitalize text-sm">Đã xác
                                nhận</span>
                            <p class="info-box-text text-sm mb-0">Số lượng: <span
                                    class="text-danger font-weight-bold">0</span></p>
                            <p class="info-box-text text-sm mb-0">Tổng giá: <span
                                    class="text-danger font-weight-bold"></span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text text-success font-weight-bold text-capitalize text-sm">Đã giao</span>
                            <p class="info-box-text text-sm mb-0">Số lượng: <span
                                    class="text-danger font-weight-bold">0</span></p>
                            <p class="info-box-text text-sm mb-0">Tổng giá: <span
                                    class="text-danger font-weight-bold"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times-circle"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text text-danger font-weight-bold text-capitalize text-sm">Đã hủy</span>
                            <p class="info-box-text text-sm mb-0">Số lượng: <span
                                    class="text-danger font-weight-bold">0</span></p>
                            <p class="info-box-text text-sm mb-0">Tổng giá: <span
                                    class="text-danger font-weight-bold"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=order&act=delete&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=order&act=man&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=order&act=man&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title card-title-order d-inline-block align-middle float-none">Danh sách đơn hàng</h3>
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
                                <th class="align-middle">Mã đơn hàng</th>
                                <th class="align-middle" style="width:15%">Họ tên</th>
                                <th class="align-middle">Ngày đặt</th>
                                <th class="align-middle">Hình thức thanh toán</th>
                                <th class="align-middle">Tổng giá</th>
                                <th class="align-middle">Tình trạng</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-54" value="54">
                                        <label for="select-checkbox-54" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="text-primary" href="index.php?com=order&act=edit&p=1&id=54"
                                        title="X5KWCD">X5KWCD</a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-primary" href="index.php?com=order&act=edit&p=1&id=54"
                                        title="asdfasf">asdfasf</a>
                                </td>
                                <td class="align-middle">08:46:59 PM - 23/10/2023</td>
                                <td class="align-middle">
                                    <span class="text-info"></span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-danger font-weight-bold"></span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-primary text-capitalize">Mới đặt</span>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <a class="text-primary mr-2" href="index.php?com=order&act=edit&p=1&id=54"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=order&act=delete&p=1&id=54" title="Xóa"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=order&act=delete&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>

    </div>
@endsection
