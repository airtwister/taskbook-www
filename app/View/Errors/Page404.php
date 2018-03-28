<?php

namespace View\Errors;

use View\RenderInterface;

class Page404 implements RenderInterface
{
    public function render()
    {

        print "
            <!doctype html>
            <html>
                <head>
                    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
                    <title>Page not found</title>
                    <style>
                        body {
                            padding: 0 8px;
                            text-align: center;
                            background-color: #43b3cb;
                            color: #fff;
                            font: 13px/1.4 Roboto,Arial,Tahoma,sans-serif
                        }
                        h1 {
                            font-weight: 700;
                            font-size: 174px;
                        }
                        p {
                            font-size: 24px;
                            margin-bottom: 10px;
                        }
                        label {
                            font-size: 15px;
                        }
                        a {
                            color: #fff;
                            text-decoration: underline;
                        }
            
                        @media only screen and (max-width: 479px) {
                            h1 {
                                font-size: 76px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <a href='/' class='logo_wrap'></a>
                    <h1 align='center'>404</h1>
                    <p>Page not found</p>
                </body>
            </html>";
    }
}