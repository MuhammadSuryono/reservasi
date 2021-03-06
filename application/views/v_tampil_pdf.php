<!DOCTYPE html>
<html>
<!--  This source code is exported from pxCode, you can get more document from https://www.pxcode.io  -->
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
            rel="stylesheet"
            type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous"
    />
    <link
            rel="stylesheet"
            type="text/css"
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        figure {
            display: block;
            font-size: 1em;
            font-weight: normal;
            margin: 0;
            border-width: 0;
        }

        ul,
        ul {
            display: block;
            margin: 0;
            padding: 0;
        }

        li {
            display: block;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
            "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans",
            "Helvetica Neue", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        code {
            font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
            monospace;
        }

        @media (max-width: 99999px) {
            .max\:show {
                display: flex;
            }

            .xxxl\:show {
                display: none;
            }

            .xxl\:show {
                display: none;
            }

            .xl\:show {
                display: none;
            }

            .lg\:show {
                display: none;
            }

            .md\:show {
                display: none;
            }

            .sm\:show {
                display: none;
            }

            .xs\:show {
                display: none;
            }

            .max\:hide {
                display: none;
            }
        }

        @media (max-width: 2999px) {
            .xxxl\:show {
                display: flex;
            }

            .xxxl\:hide {
                display: none;
            }
        }

        @media (max-width: 1919px) {
            .xxl\:show {
                display: flex;
            }

            .xxl\:hide {
                display: none;
            }
        }

        @media (max-width: 1399px) {
            .xl\:show {
                display: flex;
            }

            .xl\:hide {
                display: none;
            }
        }

        @media (max-width: 1199px) {
            .lg\:show {
                display: flex;
            }

            .lg\:hide {
                display: none;
            }
        }

        @media (max-width: 991px) {
            .md\:show {
                display: flex;
            }

            .md\:hide {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .sm\:show {
                display: flex;
            }

            .sm\:hide {
                display: none;
            }
        }

        @media (max-width: 575px) {
            .xs\:show {
                display: flex;
            }

            .xs\:hide {
                display: none;
            }
        }

        .headroom {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10000;

            will-change: transform;
            transition: transform 200ms linear;
        }

        .headroom--pinned {
            transform: translateY(0%);
        }

        .headroom--unpinned {
            transform: translateY(-100%);
        }
    </style>
    <style>
        /* fonts.css */
        @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Rum+Raisin&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Rum+Raisin&display=swap");
        @font-face {
            font-family: "FontAwesome";
            font-weight: normal;
            font-style: normal;
            src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0");
            src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0")
            format("embedded-opentype"),
            url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff2?v=4.3.0")
            format("woff2"),
            url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0")
            format("woff"),
            url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0")
            format("truetype"),
            url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular")
            format("svg");
        }
    </style>
    <style>
        /* This source code is exported from pxCode, you can get more document from https://www.pxcode.io */
        .toefl-group {
            display: flex;
            flex-direction: column;
            background-color: white;
        }

        .toefl-group.layout {
            position: relative;
            overflow: hidden;
            min-height: 842px;
            flex-shrink: 0;
        }

        .toefl-cover-block6 {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
        }

        .toefl-cover-block6.layout {
            position: absolute;
            top: 37px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 39px;
            left: 27px;
            right: 27px;
        }

        .toefl-group1 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group1.layout {
            position: absolute;
            top: 0px;
            height: 20px;
            left: 0px;
            right: 0px;
            width: 7.76%;
            margin: 651px 28.1% 95px 64.14%;
        }

        .toefl-flex13 {
            display: flex;
        }

        .toefl-flex13.layout {
            position: absolute;
            top: 613px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 141px;
            left: 0px;
            right: 0px;
            width: 6.28%;
            margin: 0px 28.84% 0px 64.88%;
        }

        .toefl-flex13-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 6px;
        }

        .toefl-flex14 {
            display: flex;
            flex-direction: column;
        }

        .toefl-flex14.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 5px 0px 0px;
        }

        .toefl-img {
            background: var(--src) center center/contain no-repeat;
        }

        .toefl-img.layout {
            position: relative;
            height: 3px;
            width: 4px;
            min-width: 4px;
            margin: 0px 0px 0px 2px;
        }

        .toefl-img.layout1 {
            position: relative;
            height: 4px;
            width: 4px;
            min-width: 4px;
            margin: 0px 2px 0px 0px;
        }

        .toefl-flex13-spacer {
            flex: 0 1 1px;
        }

        .toefl-flex13-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 0 auto;
            min-width: 1px;
        }

        .toefl-img.layout2 {
            position: relative;
            height: 1px;
            width: 1px;
            min-width: 1px;
            margin: 5px 0px 6px;
        }

        .toefl-flex13-spacer1 {
            flex: 0 1 2px;
        }

        .toefl-flex13-item2 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 3px;
        }

        .toefl-img.layout3 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 1px 0px 8px;
        }

        .toefl-flex13-item3 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 3px;
        }

        .toefl-img.layout4 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 0px 0px 9px;
        }

        .toefl-flex13-item4 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 3px;
        }

        .toefl-img.layout5 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 0px 0px 9px;
        }

        .toefl-flex13-item5 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 3px;
        }

        .toefl-img.layout6 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 1px 0px 8px;
        }

        .toefl-flex13-item6 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 3px;
        }

        .toefl-img.layout7 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 3px 0px 6px;
        }

        .toefl-flex13-item7 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 5px;
        }

        .toefl-flex15 {
            display: flex;
            flex-direction: column;
        }

        .toefl-flex15.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 6px 0px 0px;
        }

        .toefl-img.layout8 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 0px 2px 0px 0px;
        }

        .toefl-img.layout9 {
            position: relative;
            height: 3px;
            width: 3px;
            min-width: 3px;
            margin: 0px 0px 0px 2px;
        }

        .toefl-cover-block {
            display: flex;
            flex-direction: column;
            background: var(--src) center center/contain no-repeat;
        }

        .toefl-cover-block.layout {
            position: absolute;
            top: 619px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 102px;
            left: 0px;
            right: 0px;
            width: 5.91%;
            margin: 0px 29.02% 0px 65.06%;
        }

        .toefl-img.layout10 {
            position: relative;
            height: 40px;
            width: 28px;
            min-width: 28px;
            margin: 3px 2px 2px;
        }

        .toefl-txt {
            display: flex;
            justify-content: flex-end;
            font: 600 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
        }

        .toefl-txt.layout {
            position: absolute;
            top: 676px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 76px;
            left: 0px;
            right: 0px;
            width: 81.15%;
            margin: 0px auto;
        }

        .toefl-txt1 {
            display: flex;
            justify-content: flex-end;
            font: 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
        }

        .toefl-txt1.layout {
            position: absolute;
            top: 692px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 60px;
            left: 0px;
            right: 0px;
            width: 84.84%;
            margin: 0px auto;
        }

        .toefl-txt2-box.layout {
            position: absolute;
            top: 691px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 63px;
            left: 20px;
            right: 20px;
        }

        .toefl-txt2 {
            font: 10px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt2-span0 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt2-span1 {
            font: 600 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt3-box {
            display: flex;
            justify-content: flex-end;
        }

        .toefl-txt3-box.layout {
            position: absolute;
            top: 598px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 156px;
            left: 0px;
            right: 0px;
            width: 83.36%;
            margin: 0px auto;
        }

        .toefl-txt3 {
            font: 10px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
        }

        .toefl-txt3-span0 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt3-span1 {
            font: 600 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt4 {
            font: 10px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt4.layout {
            position: absolute;
            top: 598px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 156px;
            left: 0px;
            right: 0px;
            width: 73.75%;
            margin: 0px auto;
        }

        .toefl-img1 {
            background: var(--src) center center/contain no-repeat;
            width: 100%;
            height: 100%;
        }

        .toefl-txt5 {
            display: flex;
            justify-content: center;
            font: 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt5.layout {
            position: absolute;
            top: 557px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 201px;
            left: 0px;
            right: 0px;
            width: 70.98%;
            margin: 0px auto;
        }

        .toefl-flex2 {
            display: flex;
            flex-direction: column;
            background-color: white;
            border: 1px solid #b9b9b9;
            border-radius: 10px 10px 10px 10px;
        }

        .toefl-flex2.layout {
            position: absolute;
            overflow: hidden;
            top: 368px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 224px;
            left: 0px;
            right: 0px;
            width: 68.39%;
            margin: 0px auto;
        }

        .toefl-flex3 {
            display: flex;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex3.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-flex3-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 277px;
        }

        .toefl-flex4 {
            display: flex;
            flex-direction: column;
            background-color: #f3d400;
        }

        .toefl-flex4.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group2 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group2.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 0px 0px 10px;
        }

        .toefl-group3 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group3.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 28px;
        }

        .toefl-img.layout11 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt6 {
            display: flex;
            justify-content: center;
            font: 700 15px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt6.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px 0px;
        }

        .toefl-flex3-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 93px;
        }

        .toefl-group4 {
            display: flex;
            flex-direction: column;
            background-color: #03347f;
        }

        .toefl-group4.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group5 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group5.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 38px;
        }

        .toefl-img.layout12 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt7 {
            display: flex;
            justify-content: center;
            font: 700 14px/1.2 "Roboto", Helvetica, Arial, serif;
            color: white;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt7.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px 12px;
        }

        .toefl-flex5 {
            display: flex;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex5.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-flex5-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 277px;
        }

        .toefl-flex6 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex6.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group6 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group6.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 0px 0px 10px;
        }

        .toefl-group7 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group7.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 24px;
        }

        .toefl-img.layout13 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt8 {
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt8.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px 0px;
        }

        .toefl-flex5-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 93px;
        }

        .toefl-flex7 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex7.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group8 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group8.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 0px 0px 10px;
        }

        .toefl-group9 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group9.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 24px;
        }

        .toefl-img.layout14 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt9 {
            display: flex;
            justify-content: center;
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt9.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px 0px;
        }

        .toefl-flex8 {
            display: flex;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex8.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-flex8-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 277px;
        }

        .toefl-group10 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-group10.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group11 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group11.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 34px;
        }

        .toefl-img.layout15 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt10 {
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt10.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px;
        }

        .toefl-flex8-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 93px;
        }

        .toefl-group12 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group12.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 0px 0px 10px;
        }

        .toefl-group13 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group13.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 24px;
        }

        .toefl-img.layout16 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt11 {
            display: flex;
            justify-content: center;
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt11.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px 0px;
        }

        .toefl-flex10 {
            display: flex;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-flex10.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-flex10-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 277px;
        }

        .toefl-group14 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-group14.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group15 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group15.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 34px;
        }

        .toefl-img.layout17 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt12 {
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt12.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px;
        }

        .toefl-flex10-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 93px;
        }

        .toefl-group16 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-group16.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group17 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group17.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 34px;
        }

        .toefl-img.layout18 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt13 {
            display: flex;
            justify-content: center;
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt13.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px;
        }

        .toefl-group18 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-group18.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group19 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group19.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 34px;
        }

        .toefl-img.layout19 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt14 {
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt14.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px;
        }

        .toefl-flex10-item2 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 93px;
        }

        .toefl-group20 {
            display: flex;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0);
        }

        .toefl-group20.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-group21 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group21.layout {
            position: absolute;
            top: 0px;
            height: 0px;
            left: 0px;
            right: 0px;
            margin: 0px 0px 34px;
        }

        .toefl-img.layout20 {
            position: absolute;
            top: -9950px;
            height: 10000px;
            left: -100px;
            width: 101px;
        }

        .toefl-txt15 {
            display: flex;
            justify-content: center;
            font: 500 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt15.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 10px 8px;
        }

        .toefl-txt16-box {
            display: flex;
            justify-content: center;
        }

        .toefl-txt16-box.layout {
            position: absolute;
            top: 306px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 418px;
            left: 0px;
            right: 0px;
            width: 50%;
            margin: 0px auto;
        }

        .toefl-txt16 {
            overflow: visible;
            margin-top: 0px;
            margin-bottom: 0px;
            margin: 0px;
            font: 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
            white-space: pre-wrap;
        }

        .toefl-txt16-span0 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt16-span1 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0.96px;
        }

        .toefl-txt16-span2 {
            font: 600 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0.96px;
        }

        .toefl-txt16-span3 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0.96px;
        }

        .toefl-txt16-span4 {
            font: 600 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0.96px;
        }

        .toefl-txt16-span5 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0.96px;
        }

        .toefl-txt17 {
            font: 26px/1.2 "Rum Raisin", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 2.08px;
        }

        .toefl-txt17.layout {
            position: absolute;
            top: 258px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 474px;
            left: 0px;
            right: 0px;
            width: 48.98%;
            margin: 0px auto;
        }

        .toefl-txt18 {
            font: 14px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt18.layout {
            position: absolute;
            top: 226px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 524px;
            left: 0px;
            right: 0px;
            width: 23.84%;
            margin: 0px auto;
        }

        .toefl-content-box {
            display: flex;
            background-color: #f3d400;
            border-radius: 20.5px 20.5px 20.5px 20.5px;
        }

        .toefl-content-box.layout {
            position: absolute;
            top: 168px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 557px;
            left: 0px;
            right: 0px;
            width: 39.74%;
            margin: 0px auto;
        }

        .toefl-content-box-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 1 54px;
        }

        .toefl-cover-block3 {
            display: flex;
            flex-direction: column;
            background: var(--src) center center/contain no-repeat;
        }

        .toefl-cover-block3.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-txt19 {
            font: 20px/1.2 "Roboto", Helvetica, Arial, serif;
            color: white;
            letter-spacing: 0px;
        }

        .toefl-txt19.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 9px 10px 9px 19px;
        }

        .toefl-content-box-spacer {
            flex: 0 1 8px;
        }

        .toefl-txt20 {
            font: 20px/1.2 "Roboto", Helvetica, Arial, serif;
            color: white;
            letter-spacing: 0px;
        }

        .toefl-txt20.layout {
            position: relative;
            flex: 0 0 auto;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 9px 17px 9px 0px;
        }

        .toefl-txt21 {
            font: 700 36px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt21.layout {
            position: absolute;
            top: 126px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 598px;
            left: 0px;
            right: 0px;
            width: 40.48%;
            margin: 0px auto;
        }

        .toefl-cover-block4 {
            display: flex;
            flex-direction: column;
            background-color: #e5e5e5;
            border-radius: 14.5px 14.5px 14.5px 14.5px;
        }

        .toefl-cover-block4.layout {
            position: absolute;
            top: 65px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 672px;
            left: 0px;
            right: 0px;
            width: 48.8%;
            margin: 0px 3.7% 0px 47.5%;
        }

        .toefl-txt22 {
            font: 15px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
        }

        .toefl-txt22.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 5px 10px 6px 11px;
        }

        .toefl-img2 {
            background: var(--src) center center/contain no-repeat;
            width: 100%;
            height: 100%;
        }

        .toefl-txt23 {
            display: flex;
            justify-content: flex-end;
            font: 700 15px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
        }

        .toefl-txt23.layout {
            position: absolute;
            top: 24px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 724px;
            left: 0px;
            right: 0px;
            width: 42.33%;
            margin: 0px auto;
        }

        .toefl-txt24 {
            display: flex;
            justify-content: flex-end;
            font: 600 14px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
        }

        .toefl-txt24.layout {
            position: absolute;
            top: 25px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 725px;
            left: 20px;
            right: 20px;
        }

        .toefl-cover-block5 {
            display: flex;
            flex-direction: column;
            background-color: #00347d;
            border-radius: 7px 7px 7px 7px;
        }

        .toefl-cover-block5.layout {
            position: absolute;
            top: 22px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 715px;
            left: 0px;
            right: 0px;
            width: 32.16%;
            margin: 0px 64.14% 0px 3.7%;
        }

        .toefl-txt25 {
            font: 19px/1.2 "Roboto", Helvetica, Arial, serif;
            color: white;
            letter-spacing: 0px;
        }

        .toefl-txt25.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 3px 17px 4px 16px;
        }

        .toefl-cover-block2 {
            display: flex;
            flex-direction: column;
            background: var(--src) center center/contain no-repeat;
        }

        .toefl-cover-block2.layout {
            position: absolute;
            height: 87px;
            bottom: -39px;
            width: 595px;
            right: -27px;
        }

        .toefl-flex {
            display: flex;
            flex-direction: column;
        }

        .toefl-flex.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 7px 22px;
        }

        .toefl-flex1 {
            display: flex;
        }

        .toefl-flex1.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-txt26 {
            display: flex;
            justify-content: center;
            font: 700 12px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: center;
            letter-spacing: 0px;
        }

        .toefl-txt26.layout {
            position: relative;
            flex: 0 0 auto;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 17px 0px 0px;
        }

        .toefl-flex1-spacer {
            flex: 0 1 185px;
        }

        .toefl-flex1-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 1 1 279px;
        }

        .toefl-txt27-box {
            display: flex;
        }

        .toefl-txt27-box.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 0px 0px 7px;
        }

        .toefl-txt27 {
            overflow: visible;
            margin-top: 0px;
            margin-bottom: 0px;
            margin: 0px;
            font: 10px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            text-align: right;
            letter-spacing: 0px;
            white-space: pre-wrap;
        }

        .toefl-txt28-box.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            width: 36.84%;
            margin: 2px 63.16% 16px 0%;
        }

        .toefl-txt28 {
            overflow: visible;
            margin-top: 0px;
            margin-bottom: 0px;
            margin: 0px;
            font: 10px/1.2 "Roboto", Helvetica, Arial, serif;
            color: black;
            letter-spacing: 0px;
            white-space: pre-wrap;
        }

        .toefl-txt28-span0 {
            font: 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-txt28-span1 {
            font: 600 1em/1.2 "Roboto", Helvetica, Arial, serif;
            color: #000000ff;
            letter-spacing: 0px;
        }

        .toefl-rect {
            background-color: black;
        }

        .toefl-rect.layout {
            position: relative;
            height: 1px;
            width: 22.18%;
            margin: 690px 7.58% 75px 70.24%;
        }

        .toefl-cover-block1 {
            display: flex;
            flex-direction: column;
            background: var(--src) center center/contain no-repeat;
        }

        .toefl-cover-block1.layout {
            position: absolute;
            top: 609px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 92px;
            left: 0px;
            right: 0px;
            width: 8.5%;
            margin: 0px 27.73% 0px 63.77%;
        }

        .toefl-img.layout21 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 58px 15px 4px 28px;
        }

        .toefl-img.layout22 {
            position: absolute;
            top: 0px;
            height: 2px;
            left: 0px;
            width: 2px;
            min-width: 2px;
            margin: 59px 22px 4px;
        }

        .toefl-img.layout23 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 1px;
            min-width: 1px;
            margin: 58px 25px 4px 20px;
        }

        .toefl-img.layout24 {
            position: absolute;
            top: 0px;
            height: 4px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 58px 18px 3px 25px;
        }

        .toefl-img.layout25 {
            position: absolute;
            top: 0px;
            height: 2px;
            left: 0px;
            width: 2px;
            min-width: 2px;
            margin: 54px 9px 9px 35px;
        }

        .toefl-img.layout26 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 54px 34px 8px 9px;
        }

        .toefl-img.layout27 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 2px;
            min-width: 2px;
            margin: 55px 11px 7px 33px;
        }

        .toefl-img.layout28 {
            position: absolute;
            top: 0px;
            height: 4px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 57px 28px 4px 15px;
        }

        .toefl-img.layout29 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 56px 31px 6px 12px;
        }

        .toefl-img.layout30 {
            position: absolute;
            top: 0px;
            height: 4px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 48px 39px 13px 4px;
        }

        .toefl-img3 {
            background: var(--src) center center/contain no-repeat;
            width: 100%;
            height: 100%;
        }

        .toefl-img.layout31 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 2px;
            min-width: 2px;
            margin: 47px 4px 15px 40px;
        }

        .toefl-img.layout32 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 3px;
            min-width: 3px;
            margin: 45px 40px 17px 3px;
        }

        .toefl-img4 {
            background: var(--src) center center/contain no-repeat;
            width: 100%;
            height: 100%;
        }

        .toefl-img.layout33 {
            position: absolute;
            top: 0px;
            height: 3px;
            left: 0px;
            width: 4px;
            min-width: 4px;
            margin: 52px 36px 10px 6px;
        }

        .toefl-group22 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group22.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            margin: 23px 2px;
        }

        .toefl-img.layout34 {
            position: absolute;
            height: 2px;
            bottom: -2px;
            left: 0px;
            width: 3px;
        }

        .toefl-group23 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group23.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-img.layout35 {
            position: absolute;
            height: 3px;
            bottom: -17px;
            width: 2px;
            right: 11px;
        }

        .toefl-flex12 {
            display: flex;
        }

        .toefl-flex12.layout {
            position: relative;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
        }

        .toefl-flex12-item {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 0 auto;
            min-width: 2px;
        }

        .toefl-rect.layout1 {
            position: relative;
            height: 18px;
            margin: 0px 0px 1px;
        }

        .toefl-rect.layout2 {
            position: relative;
            height: 18px;
            margin: 0px 0px 1px;
        }

        .toefl-flex12-spacer {
            flex: 0 1 35px;
        }

        .toefl-flex12-item1 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 0 auto;
            min-width: 1px;
        }

        .toefl-rect.layout3 {
            position: relative;
            height: 17px;
            margin: 1px 0px;
        }

        .toefl-flex12-spacer1 {
            flex: 0 1 1px;
        }

        .toefl-flex12-item2 {
            display: flex;
            flex-direction: column;
            position: relative;
            flex: 0 0 auto;
            min-width: 1px;
        }

        .toefl-img.layout36 {
            position: relative;
            height: 17px;
            width: 1px;
            min-width: 1px;
            margin: 1px 0px;
        }

        .toefl-group24 {
            display: flex;
            flex-direction: column;
        }

        .toefl-group24.layout {
            position: absolute;
            top: 615px;
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            bottom: 103px;
            left: 0px;
            right: 0px;
            width: 17.19%;
            margin: 0px 10.17% 0px 72.64%;
        }

        .toefl-img.layout37 {
            position: absolute;
            height: 3px;
            bottom: 1px;
            left: -10px;
            width: 3px;
        }

        .toefl-img.layout38 {
            position: relative;
            height: 48px;
            width: 93px;
            min-width: 93px;
            margin: 0px auto;
        }
        .toefl-flex5.layout,
        .toefl-flex8.layout,
        .toefl-flex10.layout {
            border-bottom: 1px solid rgb(158, 158, 158);
        }
    </style>
</head>

<body style="display: flex; justify-content: center;">
<div class="toefl toefl-group layout" style="width: 595px;">
    <div class="toefl-cover-block6 layout">


        <div class="toefl-txt layout">Samsul Arifin S.Pd</div>
        <div class="toefl-txt1 layout">Director of Mr. Toefl ID</div>
        <div class="toefl-txt2-box layout">
            <div class="toefl-txt2">
            <span class="toefl-txt2-span0"
            >This certificate is acceptable until</span
            ><span class="toefl-txt2-span1"> October 3rd, 2023</span>
            </div>
        </div>
        <div class="toefl-txt3-box layout">
            <div class="toefl-txt3">
            <span class="toefl-txt3-span0">Kediri, </span
            ><span class="toefl-txt3-span1">October 3rd, 2021</span>
            </div>
        </div>
        <div class="toefl-txt4 layout">Scan Here for Validation</div>
        <img src="<?= base_url('assets/pdf/assets/') ?>1759fe2bef177f2ce0f44524d26dec04.png" width="70px" style="position: absolute; bottom: 80px; left: 87px;">
        <div class="toefl-txt5 layout">
            We hope this letter of explanation will be found usefull where
            necessary.
        </div>
        <div class="toefl-flex2 layout">
            <div class="toefl-flex3 layout">
                <div class="toefl-flex3-item">
                    <div class="toefl-flex4 layout">
                        <div class="toefl-group2 layout">
                            <div class="toefl-group3 layout">
                                <div
                                        style="
                                                --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                                "
                                        class="toefl-img layout11"
                                ></div>
                            </div>
                            <div class="toefl-txt6 layout">SECTION</div>
                        </div>
                    </div>
                </div>
                <div class="toefl-flex3-item1">
                    <div class="toefl-group4 layout">
                        <div class="toefl-group5 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout12"
                            ></div>
                        </div>
                        <div class="toefl-txt7 layout">SCORE</div>
                    </div>
                </div>
            </div>
            <div class="toefl-flex5 layout">
                <div class="toefl-flex5-item">
                    <div class="toefl-flex6 layout">
                        <div class="toefl-group6 layout">
                            <div class="toefl-group7 layout">
                                <div
                                        style="
                                                --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                                "
                                        class="toefl-img layout13"
                                ></div>
                            </div>
                            <div class="toefl-txt8 layout">Listening Comprehension</div>
                        </div>
                    </div>
                </div>
                <div class="toefl-flex5-item1">
                    <div class="toefl-flex7 layout">
                        <div class="toefl-group8 layout">
                            <div class="toefl-group9 layout">
                                <div
                                        style="
                                                --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                                "
                                        class="toefl-img layout14"
                                ></div>
                            </div>
                            <div class="toefl-txt9 layout">61</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toefl-flex8 layout">
                <div class="toefl-flex8-item">
                    <div class="toefl-group10 layout">
                        <div class="toefl-group11 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout15"
                            ></div>
                        </div>
                        <div class="toefl-txt10 layout">
                            Structure and Written Expression
                        </div>
                    </div>
                </div>
                <div class="toefl-flex8-item1">
                    <div class="toefl-flex7 layout">
                        <div class="toefl-group12 layout">
                            <div class="toefl-group13 layout">
                                <div
                                        style="
                                                --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                                "
                                        class="toefl-img layout16"
                                ></div>
                            </div>
                            <div class="toefl-txt11 layout">46</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toefl-flex10 layout">
                <div class="toefl-flex10-item">
                    <div class="toefl-group14 layout">
                        <div class="toefl-group15 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout17"
                            ></div>
                        </div>
                        <div class="toefl-txt12 layout">Reading Comprehesion</div>
                    </div>
                </div>
                <div class="toefl-flex10-item1">
                    <div class="toefl-group16 layout">
                        <div class="toefl-group17 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout18"
                            ></div>
                        </div>
                        <div class="toefl-txt13 layout">53</div>
                    </div>
                </div>
            </div>
            <div class="toefl-flex10 layout">
                <div class="toefl-flex10-item">
                    <div class="toefl-group18 layout">
                        <div class="toefl-group19 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout19"
                            ></div>
                        </div>
                        <div class="toefl-txt14 layout">Total</div>
                    </div>
                </div>
                <div class="toefl-flex10-item2">
                    <div class="toefl-group20 layout">
                        <div class="toefl-group21 layout">
                            <div
                                    style="
                                            --src: url(<?= base_url('assets/pdf/assets/') ?>2c0c845126fb86e7c4f988ba48c1412e.png);
                                            "
                                    class="toefl-img layout20"
                            ></div>
                        </div>
                        <div class="toefl-txt15 layout">533</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="toefl-txt16-box layout">
          <pre
                  class="toefl-txt16"
          ><span class="toefl-txt16-span0">has achieved the following scores on the
</span><span class="toefl-txt16-span1">English Proficiency Test (TOEFL Test)
</span><span class="toefl-txt16-span4">at Mr. Toefl ID</span><span class="toefl-txt16-span5"> </span></pre>
        </div>
        <div class="toefl-txt17 layout" style="width: 100%;text-align: center;">AHMAD AVICENNA ARIFIN</div>
        <div class="toefl-txt18 layout">This is to certify that</div>
        <div class="toefl-content-box layout">
            <div class="toefl-content-box-item">
                <div
                        style="--src: url(<?= base_url('assets/pdf/assets/') ?>9b944ee5d12d2c7ed68f907047b100c0.png)"
                        class="toefl-cover-block3 layout"
                >
                    <div class="toefl-txt19 layout">OF</div>
                </div>
            </div>
            <div class="toefl-content-box-spacer"></div>
            <div class="toefl-txt20 layout">ACHIEVEMENT</div>
        </div>
        <div class="toefl-txt21 layout">CERTIFICATE</div>
        <div class="toefl-cover-block4 layout" style="width: 50% !important; left: initial;">
            <div class="toefl-txt22 layout">SK DINAS: 421.9/4519/418.20/2021</div>
        </div>
        <img src="<?= base_url('assets/pdf/assets/') ?>9.png" width="15px" style="position: absolute; top: 26px; left: 18.1rem;">
        <div class="toefl-txt23 layout">Mr.Toefl ID</div>
        <div class="toefl-txt24 layout">Brighten English</div>
        <div class="toefl-cover-block5 layout">
            <div class="toefl-txt25 layout">MT8293/X/2021</div>
        </div>
        <div
                style="--src: url(<?= base_url('assets/pdf/assets/83772b36969a6eefbe37cbcf1893415a.png') ?>)"
                class="toefl-cover-block2 layout"
        >
            <div class="toefl-flex layout">
                <div class="toefl-flex1 layout">
                    <div class="toefl-txt26 layout">Head Office:</div>
                    <div class="toefl-flex1-spacer"></div>
                    <div class="toefl-flex1-item">
                        <div class="toefl-txt27-box layout">
                  <pre class="toefl-txt27">
TOEFL is a registered trademark of Educational Testing Service
(ETS). This document is not endorsed or approved by ETS.</pre
                  >
                        </div>
                    </div>
                </div>
                <div class="toefl-txt28-box layout">
              <pre
                      class="toefl-txt28"
              ><span class="toefl-txt28-span0">Dr. Bengawan Solo St, no 59 Kampung Inggris
Pare Kediri, Contact Person: </span><span class="toefl-txt28-span1">085732127361</span></pre>
                </div>
            </div>
        </div>
        <hr class="toefl-rect layout" />

        <div class="toefl-group24 layout">
            <img src="<?= base_url('assets/pdf/assets/') ?>Group 11.png" style="position: absolute; right: 6rem;">
            <!-- Tanda tangan  -->
            <div
                    style="--src: url(<?= base_url('assets/pdf/assets/') ?>da041f6e9414895939992d455970ace8.png)"
                    class="toefl-img layout38"
            ></div>
            <!-- Tanda tangan  -->
        </div>
    </div>
</div>
<script type="text/javascript">
    AOS.init();
</script>
</body>
</html>
