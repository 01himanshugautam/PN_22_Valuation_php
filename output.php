<html>

<head>
    <title>Export Html to Word Document</title>
</head>

<body>
    <div id="exportContent">
        <!-- Your content to export here -->
        <h3>What is Lorem Ipsum?</h3>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has
        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop
        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>

    <button onclick="Export2Doc('exportContent', 'test');">
        Export as Doc
    </button>

    <script>
    function Export2Doc(element, filename = "") {
        var preHtml =
            "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
        var postHtml = "</body></html>";
        var html =
            preHtml + document.getElementById(element).innerHTML + postHtml;

        var blob = new Blob(["\ufeff", html], {
            type: "application/msword",
        });

        var url =
            "data:application/vnd.ms-word;charset=utf-8," +
            encodeURIComponent(html);

        filename = filename ? filename + ".doc" : "document.doc";

        var downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            downloadLink.href = url;

            downloadLink.download = filename;

            downloadLink.click();
        }

        document.body.removeChild(downloadLink);
    }
    </script>
</body>

</html>