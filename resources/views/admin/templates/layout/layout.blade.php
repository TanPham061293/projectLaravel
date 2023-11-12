
@php
require_once 'admin/type/config-type-product.php';
//require_once 'admin/type/config-type-news.php';
require_once 'admin/type/config-type-photo.php';
//require_once 'admin/type/config-type-newsletter.php';
require_once 'admin/type/config-type-static.php'; //public
//require_once 'admin/type/config-type.php';

@endphp
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="" rel="shortcut icon" type="image/x-icon" />

    <title>Administrator</title>
    <!-- CSS -->
    <link href="{{asset('client/assets/fontawesome512/all-admin.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/sweetalert2/sweetalert2.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/sumoselect/sumoselect.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/datetimepicker/jquery.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/select2/select2.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/rangeSlider/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/filer/jquery.filer.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/filer/jquery.filer-dragdropbox-theme.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/holdon/HoldOn.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/adminlte.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/adminlte-style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- JS -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('admin/assets/select2/select2.full.js')}}"></script>
    <script src="{{asset('admin/assets/sumoselect/jquery.sumoselect.js')}}"></script>
    <script src="{{asset('admin/assets/datetimepicker/php-date-formatter.min.js')}}"></script>
    <script src="{{asset('admin/assets/datetimepicker/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('admin/assets/datetimepicker/jquery.datetimepicker.js')}}"></script>
    <script src="{{asset('admin/assets/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/assets/rangeSlider/ion.rangeSlider.js')}}"></script>
    <script src="{{asset('admin/assets/js/priceFormat.js')}}"></script>
    <script src="{{asset('admin/assets/jscolor/jscolor.js')}}"></script>
    <script src="{{asset('admin/assets/filer/jquery.filer.js')}}"></script>
    <script src="{{asset('admin/assets/holdon/HoldOn.js')}}"></script>
    <script src="{{asset('admin/assets/sortable/Sortable.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/adminlte.js')}}"></script>
    <script src="{{asset('admin/assets/js/function.js')}}"></script>
    <!-- Ckeditor - Elfinder -->
    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.editorConfig = function(config) {
            /* Config General */
            config.language = 'vi';
            config.skin = 'moono-lisa';
            config.width = 'auto';
            config.height = 620;
            /* Allow element */
            config.allowedContent = true;
            /* Entities */
            config.entities = false;
            config.entities_latin = false;
            config.entities_greek = false;
            config.basicEntities = false;
            /* Config CSS */
            config.contentsCss = [
                '/admin/ckeditor/contents.css'
            ];
            /* All Plugins */
            config.extraPlugins =
                'texttransform,copyformatting,html5video,html5audio,flash,youtube,wordcount,tableresize,widget,lineutils,clipboard,dialog,dialogui,widgetselection,lineheight,video,videodetector';
            /* Config Lineheight */
            config.line_height = '1;1.1;1.2;1.3;1.4;1.5;2;2.5;3;3.5;4;4.5;5';
            /* Config Word */
            config.pasteFromWordRemoveFontStyles = false;
            config.pasteFromWordRemoveStyles = false;
            /* Config ELFinder */
            config.filebrowserBrowseUrl = 'elfinder/index.php';
            /* Config ToolBar */
            config.toolbar = [{
                    name: 'document',
                    items: ['Source', '-', 'NewPage', 'Preview', 'Print', '-', 'Templates']
                },
                {
                    name: 'clipboard',
                    items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', 'PasteFromExcel', '-', 'Undo',
                        'Redo'
                    ]
                },
                {
                    name: 'editing',
                    items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
                },
                {
                    name: 'forms',
                    items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                        'HiddenField'
                    ]
                },
                '/',
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-',
                        'CopyFormatting', 'RemoveFormat'
                    ]
                },
                {
                    name: 'texttransform',
                    items: ['TransformTextToUppercase', 'TransformTextToLowercase', 'TransformTextCapitalize',
                        'TransformTextSwitcher'
                    ]
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
                        'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-',
                        'BidiLtr', 'BidiRtl', 'Language'
                    ]
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink', 'Anchor']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Flash', 'Youtube', 'VideoDetector', 'Html5video', 'Video', 'Html5audio',
                        'Iframe', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'
                    ]
                },
                '/',
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize', 'ShowBlocks']
                },
                {
                    name: 'about',
                    items: ['About']
                }
            ];
            /* Config StylesSet */
            config.stylesSet = [{
                    name: 'Font Seguoe Regular',
                    element: 'span',
                    attributes: {
                        'class': 'segui'
                    }
                },
                {
                    name: 'Font Seguoe Semibold',
                    element: 'span',
                    attributes: {
                        'class': 'seguisb'
                    }
                },
                {
                    name: 'Italic title',
                    element: 'span',
                    styles: {
                        'font-style': 'italic'
                    }
                },
                {
                    name: 'Special Container',
                    element: 'div',
                    styles: {
                        'background': '#eee',
                        'border': '1px solid #ccc',
                        'padding': '5px 10px'
                    }
                },
                {
                    name: 'Big',
                    element: 'big'
                },
                {
                    name: 'Small',
                    element: 'small'
                },
                {
                    name: 'Inline ',
                    element: 'q'
                },
                {
                    name: 'marker',
                    element: 'span',
                    attributes: {
                        'class': 'marker'
                    }
                }
            ];
            /* Config Wordcount */
            config.wordcount = {
                showParagraphs: true,
                showWordCount: true,
                showCharCount: true,
                countSpacesAsChars: false,
                countHTML: false,
                filter: new CKEDITOR.htmlParser.filter({
                    elements: {
                        div: function(element) {
                            if (element.attributes.class == 'mediaembed') {
                                return false;
                            }
                        }
                    }
                })
            };
        };
    </script>
</head>

<body class="sidebar-mini hold-transition text-sm">
    <div class="wrapper">
        @include('admin.templates.layout.header');
        @include('admin.templates.layout.menu');
        @yield('content')
        @include('admin.templates.layout.footer');
    </div>

</body>

</html>
