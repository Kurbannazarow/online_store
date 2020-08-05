<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kichi Gala</title>
    <script type="text/javascript" src="js2/jgallery.min.js?v=2.2.1"></script>
    <style>
        body {
            padding: 0;
            margin: 0;
            background: black;
            color: white;
        }

        h1 {
            text-align: center;
            margin-bottom: 0;
        }

        .link {
            text-align: center;
        }

        a {
            font-size: 18px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Наша фотогалерея.</h1>
    <div class="link">
        <a href="index.php">в магазин</a>
    </div>
    <div id="gallery">
    </div>
    <script type="text/javascript">
        document.querySelector('#gallery').appendChild(JGallery.create([{
                title: 'Фото офиса',
                items: [{
                        url: 'img/galery/1.JPG',
                        thumbUrl: 'img/galery/1_1.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-1'
                    },
                    {
                        url: 'img/galery/2.JPG',
                        thumbUrl: 'img/galery/2_2.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-2'
                    },
                    {
                        url: 'img/galery/3.JPG',
                        thumbUrl: 'img/galery/3_3.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-3'
                    },
                    {
                        url: 'img/galery/4.JPG',
                        thumbUrl: 'img/galery/4_4.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-2'
                    },
                    {
                        url: 'img/galery/5.JPG',
                        thumbUrl: 'img/galery/5_5.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-3'
                    },
                    {
                        url: 'img/galery/log.jpg',
                        thumbUrl: 'img/galery/6_6.jpg',
                        title: 'Kichi Gala',
                        hash: 'photo-3'
                    }
                ]
            }
            //  {
            //     title: 'Фото продуктов',
            //     items: [
            //         {
            //             element: JGallery.createElement('<video src="SampleVideo_1280x720_1mb.mp4" loop autoplay/>'),
            //             thumbElement: JGallery.createElement('<span>Video</span>'),
            //             title: 'Video',
            //             hash: 'video'
            //         },
            //         {
            //             element: JGallery.createElement('<span style="font-size: 10vmax">Any HTML content</span>'),
            //             thumbElement: JGallery.createElement('<span>HTML</span>'),
            //             title: 'HTML',
            //             hash: 'html'
            //         }
            //     ]
            // }
        ]).getElement());
    </script>
</body>

</html>