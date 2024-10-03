<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<script src="js/flipbook.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#container").flipBook({

            pages:[

                {src:"images/book2/page1.jpg", thumb:"images/book2/thumb1.jpg", title:"Cover"},
                {src:"images/book2/page2.jpg", thumb:"images/book2/thumb2.jpg", title:"Page two"},
                {src:"images/book2/page3.jpg", thumb:"images/book2/thumb3.jpg", title:"Page three"},
                {src:"images/book2/page4.jpg", thumb:"images/book2/thumb4.jpg", title:""},
                {src:"images/book2/page5.jpg", thumb:"images/book2/thumb5.jpg", title:"Page five"},
                {src:"images/book2/page6.jpg", thumb:"images/book2/thumb6.jpg", title:"Page six"},
                {src:"images/book2/page7.jpg", thumb:"images/book2/thumb7.jpg", title:"Page seven"},
                {src:"images/book2/page8.jpg", thumb:"images/book2/thumb8.jpg", title:"Last"}

            ],

			btnZoomIn : {vAlign:'top', hAlign:'right'},
			btnZoomOut : {vAlign:'top', hAlign:'right'},
			btnToc : {vAlign:'top', hAlign:'right'},
			btnShare :{vAlign:'top', hAlign:'right'},
			btnDownloadPages : {vAlign:'top', hAlign:'right'},
			btnDownloadPdf : {vAlign:'top', hAlign:'right'},
            btnSound : {vAlign:'top', hAlign:'right'},
            btnToc : {vAlign:'top', hAlign:'left'},
            btnThumbs : {vAlign:'top', hAlign:'left'},
            btnBookmark : {vAlign:'top', hAlign:'left'},
            btnExpand : {vAlign:'top', hAlign:'right'},
            btnPrint : {vAlign:'top', hAlign:'right'},
			btnAutoplay : {vAlign:'top', hAlign:'right'},
            currentPage:{hAlign:'center'},

            viewMode:'3d',

            skin:'dark',

            menu2Transparent:false,
            menu2OverBook:false,

        });
    })
</script>

</head>

<body>
<div id="container"/>
</body>

</html>
