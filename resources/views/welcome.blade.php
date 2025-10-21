<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--spacing:.25rem}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}}}
            
            body {
                background: #FDFDFC url('https://images.pexels.com/photos/1519088/pexels-photo-1519088.jpeg') no-repeat center center fixed;
                background-size: cover;
                color: #1b1b18;
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                min-height: 100vh;
                display: flex;
                padding: 1.5rem;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                position: relative;
            }

            /* Overlay for better readability */
            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(253, 253, 252, 0.85);
                backdrop-filter: blur(8px);
                z-index: 0;
            }

            @media (prefers-color-scheme: dark) {
                body {
                    background-color: #0a0a0a;
                }
                
                body::before {
                    background: rgba(10, 10, 10, 0.85);
                }
            }

            header {
                width: 100%;
                max-width: 335px;
                font-size: 0.875rem;
                margin-bottom: 1.5rem;
                position: relative;
                z-index: 1;
            }

            @media (min-width: 1024px) {
                header {
                    max-width: 56rem;
                }
            }

            nav {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                gap: 1rem;
            }

            nav a {
                display: inline-block;
                padding: 0.375rem 1.25rem;
                color: #1b1b18;
                border: 1px solid rgba(25, 20, 0, 0.21);
                background: rgba(255, 255, 255, 0.7);
                backdrop-filter: blur(10px);
                border-radius: 0.25rem;
                font-size: 0.875rem;
                line-height: 1.428;
                text-decoration: none;
            }

            nav a:hover {
                border-color: rgba(25, 21, 1, 0.29);
            }

            @media (prefers-color-scheme: dark) {
                nav a {
                    color: #EDEDEC;
                    border-color: #3E3E3A;
                    background: rgba(22, 22, 21, 0.7);
                }
                nav a:hover {
                    border-color: #62605b;
                }
            }

            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                transition: opacity 0.75s;
                opacity: 1;
                position: relative;
                z-index: 1;
            }

            @media (min-width: 1024px) {
                .wrapper {
                    flex-grow: 1;
                }
            }

            main {
                display: flex;
                max-width: 335px;
                width: 100%;
                flex-direction: column-reverse;
            }

            @media (min-width: 1024px) {
                main {
                    max-width: 56rem;
                    flex-direction: row;
                }
            }

            .text-content {
                font-size: 0.8125rem;
                line-height: 1.538;
                flex: 1;
                padding: 1.5rem 1.5rem 3rem;
                background: white;
                color: #1b1b18;
                box-shadow: inset 0px 0px 0px 1px rgba(26, 26, 0, 0.16);
                border-bottom-left-radius: 0.5rem;
                border-bottom-right-radius: 0.5rem;
            }

            @media (min-width: 1024px) {
                .text-content {
                    padding: 5rem;
                    border-top-left-radius: 0.5rem;
                    border-bottom-right-radius: 0;
                }
            }

            @media (prefers-color-scheme: dark) {
                .text-content {
                    background: #161615;
                    color: #EDEDEC;
                    box-shadow: inset 0px 0px 0px 1px #fffaed2d;
                }
            }

            h1 {
                margin-bottom: 0.25rem;
                font-weight: 500;
            }

            .subtitle {
                margin-bottom: 0.5rem;
                color: #706f6c;
            }

            @media (prefers-color-scheme: dark) {
                .subtitle {
                    color: #A1A09A;
                }
            }

            ul {
                display: flex;
                flex-direction: column;
                margin-bottom: 1rem;
            }

            @media (min-width: 1024px) {
                ul {
                    margin-bottom: 1.5rem;
                }
            }

            li {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 0.5rem 0;
                position: relative;
            }

            li::before {
                content: '';
                position: absolute;
                left: 0.4rem;
                border-left: 1px solid #e3e3e0;
            }

            @media (prefers-color-scheme: dark) {
                li::before {
                    border-color: #3E3E3A;
                }
            }

            li:first-child::before {
                top: 50%;
                bottom: 0;
            }

            li:last-child::before {
                top: 0;
                bottom: 50%;
            }

            .icon-wrapper {
                position: relative;
                padding: 0.25rem 0;
                background: white;
            }

            @media (prefers-color-scheme: dark) {
                .icon-wrapper {
                    background: #161615;
                }
            }

            .icon-circle {
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 9999px;
                background: #FDFDFC;
                box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.03), 0px 1px 2px 0px rgba(0, 0, 0, 0.06);
                width: 0.875rem;
                height: 0.875rem;
                border: 1px solid #e3e3e0;
            }

            @media (prefers-color-scheme: dark) {
                .icon-circle {
                    background: #161615;
                    border-color: #3E3E3A;
                }
            }

            .icon-dot {
                border-radius: 9999px;
                background: #dbdbd7;
                width: 0.375rem;
                height: 0.375rem;
            }

            @media (prefers-color-scheme: dark) {
                .icon-dot {
                    background: #3E3E3A;
                }
            }

            a.link {
                display: inline-flex;
                align-items: center;
                gap: 0.25rem;
                font-weight: 500;
                text-decoration: underline;
                text-underline-offset: 4px;
                color: #f53003;
                margin-left: 0.25rem;
            }

            @media (prefers-color-scheme: dark) {
                a.link {
                    color: #FF4433;
                }
            }

            a.link svg {
                width: 0.625rem;
                height: 0.625rem;
            }

            .cta {
                display: flex;
                gap: 0.75rem;
                font-size: 0.875rem;
                line-height: 1.428;
            }

            .btn {
                display: inline-block;
                padding: 0.375rem 1.25rem;
                background: #1b1b18;
                border-radius: 0.25rem;
                border: 1px solid #1b1b18;
                color: white;
                font-size: 0.875rem;
                line-height: 1.428;
                text-decoration: none;
            }

            .btn:hover {
                background: black;
                border-color: black;
            }

            @media (prefers-color-scheme: dark) {
                .btn {
                    background: #eeeeec;
                    border-color: #eeeeec;
                    color: #1C1C1A;
                }
                .btn:hover {
                    background: white;
                    border-color: white;
                }
            }

            .visual-area {
                background: #fff2f2;
                position: relative;
                margin-bottom: -1px;
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
                aspect-ratio: 335 / 376;
                overflow: hidden;
                width: 100%;
                flex-shrink: 0;
            }

            @media (min-width: 1024px) {
                .visual-area {
                    margin-bottom: 0;
                    margin-left: -1px;
                    aspect-ratio: auto;
                    width: 438px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0.5rem;
                    border-bottom-right-radius: 0.5rem;
                }
            }

            @media (prefers-color-scheme: dark) {
                .visual-area {
                    background: #1D0002;
                }
            }

            .logo-svg {
                width: 100%;
                color: #F53003;
                transition: all 0.75s;
                opacity: 1;
                transform: translateY(0);
                max-width: none;
            }

            @media (prefers-color-scheme: dark) {
                .logo-svg {
                    color: #F61500;
                }
            }

            .graphic-svg {
                width: 448px;
                max-width: none;
                position: relative;
                margin-top: -4.9rem;
                margin-left: -2rem;
                transition: all 0.75s;
                opacity: 1;
                transform: translateY(0);
            }

            @media (min-width: 1024px) {
                .graphic-svg {
                    margin-left: 0;
                    margin-top: -6.6rem;
                }
            }

            .light-mode {
                display: block;
            }

            .dark-mode {
                display: none;
            }

            @media (prefers-color-scheme: dark) {
                .light-mode {
                    display: none;
                }
                .dark-mode {
                    display: block;
                }
            }

            .visual-border {
                position: absolute;
                inset: 0;
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
                box-shadow: inset 0px 0px 0px 1px rgba(26, 26, 0, 0.16);
            }

            @media (min-width: 1024px) {
                .visual-border {
                    border-top-left-radius: 0;
                    border-top-right-radius: 0.5rem;
                    border-bottom-right-radius: 0.5rem;
                }
            }

            @media (prefers-color-scheme: dark) {
                .visual-border {
                    box-shadow: inset 0px 0px 0px 1px #fffaed2d;
                }
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <main>
                <div class="text-content">
                    <h1>Let's get started</h1>
                    <p class="subtitle">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>
                    <ul>
                        <li>
                            <span class="icon-wrapper">
                                <span class="icon-circle">
                                    <span class="icon-dot"></span>
                                </span>
                            </span>
                            <span>
                                Read the
                                <a href="https://laravel.com/docs" target="_blank" class="link">
                                    <span>Documentation</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li>
                            <span class="icon-wrapper">
                                <span class="icon-circle">
                                    <span class="icon-dot"></span>
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a href="https://laracasts.com" target="_blank" class="link">
                                    <span>Laracasts</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <div class="cta">
                        <a href="https://cloud.laravel.com" target="_blank" class="btn">Deploy now</a>
                    </div>
                </div>

                <div class="visual-area">
                    <svg class="logo-svg" viewBox="0 0 440 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656Z" fill="currentColor" />
                    </svg>

                    <svg class="graphic-svg light-mode" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" stroke="#1B1B18" stroke-width="1" />
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" stroke="#1B1B18" stroke-width="1" />
                        <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" stroke="#1B1B18" stroke-width="1" />
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" stroke="#1B1B18" stroke-width="1" />
                    </svg>

                    <svg class="graphic-svg dark-mode" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.