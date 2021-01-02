
$(function() {
    //画像プレビュー処理
    var $fileInput = $(".js-file-input");

    //ファイルがインプットされた場合の処理
    $fileInput.on("change", function (e) {
    console.log('ファイルがインプットされました');
        var file = this.files[0],
            $filePrev = $(this).siblings(".js-file-prev"); // 2. files配列にファイルが入っています
        fileReader = new FileReader(); // 4. ファイルを読み込むFileReaderオブジェクト

        // 読み込みが完了した際のイベントハンドラ。imgのsrcにデータをセット
        fileReader.onload = function(event) {
            // アウトプット登録画面のimg/videoのsrcへurlを直接格納
            $filePrev.attr("src", event.target.result).show();
        };

        // 読み込んだ後の背景色を白にする
        $(this)
            .parent(".js-area-drop")
            .css("background", "#FFFFFF");

        // 読み込んだ後に削除ボタンを表示する
        $(this)
            .parent()
            .find(".prev-close")
            .show();

        // 6. 画像読み込み
        fileReader.readAsDataURL(file);
    });

    //×ボタンでプレビュー削除
    var $close = $(".prev-close");
    $close.on("click", function() {
        $(this)
            .parent()
            .find(".js-file-prev")
            .attr("src", "")
            .hide();
        $(this)
            .parent()
            .find(".js-file-input")
            .val("");

        $(this)
            .parent(".js-area-drop")
            .css("background", "rgb(235, 233, 233)");
        $(this).css("display", "none");
        });
});