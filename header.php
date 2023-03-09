<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php
    global $class;
    wp_head(); ?>
</head>
<body <?php body_class($class); ?>>

<header>
    <div class="container">
        <div class="wrapper">
            <div class="col4">
                <div class="logo">
                    <svg width="270" height="40" viewBox="0 0 270 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_728)">
                            <path d="M184.544 14.0985H189.466V30.3251H184.544V14.0985ZM179.69 22.0788C179.158 21.7463 178.559 21.4138 177.961 21.2143C177.362 21.0148 176.697 20.8153 176.099 20.6823C175.5 20.5493 174.902 20.4163 174.37 20.2168C173.837 20.0838 173.438 19.8842 173.106 19.6847C172.773 19.4852 172.64 19.1527 172.64 18.8202C172.64 18.5542 172.707 18.2882 172.84 18.1552C172.973 17.9557 173.172 17.8227 173.438 17.6897C173.704 17.5567 174.037 17.5567 174.436 17.5567C175.168 17.5567 175.7 17.7562 176.099 18.0887C176.498 18.4212 176.764 18.8867 176.83 19.4187H181.352C181.219 18.3547 180.887 17.3572 180.355 16.5591C179.823 15.7611 179.025 15.0961 178.094 14.6306C177.096 14.165 175.899 13.899 174.503 13.899C173.106 13.899 171.909 14.0985 170.911 14.5641C169.914 15.0296 169.182 15.6281 168.65 16.3596C168.118 17.0911 167.852 17.9557 167.852 18.8867C167.852 19.7512 167.985 20.4163 168.318 21.0148C168.65 21.6133 169.049 22.0788 169.581 22.4113C170.113 22.7439 170.645 23.0099 171.31 23.2094C171.909 23.4089 172.574 23.6084 173.239 23.7414C173.904 23.8744 174.436 24.0074 174.968 24.1404C175.5 24.2734 175.899 24.4729 176.232 24.6724C176.564 24.8719 176.697 25.2044 176.697 25.537C176.697 25.803 176.631 26.0025 176.431 26.202C176.298 26.4015 176.032 26.5345 175.766 26.6675C175.5 26.8005 175.101 26.867 174.636 26.867C173.971 26.867 173.372 26.6675 172.906 26.335C172.441 26.0025 172.175 25.537 172.108 24.9384H167.254C167.32 26.0025 167.653 26.9335 168.318 27.7315C168.916 28.5961 169.781 29.1946 170.911 29.7266C171.975 30.1921 173.239 30.4581 174.702 30.4581C176.032 30.4581 177.229 30.2586 178.227 29.7931C179.224 29.3276 179.956 28.7956 180.488 27.9975C181.02 27.266 181.286 26.4015 181.286 25.537C181.286 24.6724 181.086 23.9409 180.754 23.3424C180.687 22.8769 180.222 22.4113 179.69 22.0788ZM133.005 14.8301C133.803 14.3645 134.668 14.0985 135.732 14.0985C136.397 14.0985 136.995 14.165 137.527 14.3645C138.059 14.5641 138.591 14.8301 138.99 15.2291C139.456 15.6281 139.788 16.0936 140.054 16.6921H145.441C145.042 15.2291 144.377 13.9655 143.512 12.9015C142.581 11.8375 141.517 11.0394 140.187 10.4409C138.857 9.84238 137.394 9.57637 135.798 9.57637C134.269 9.57637 132.872 9.84238 131.675 10.3079C130.411 10.8399 129.347 11.5049 128.416 12.436C127.485 13.367 126.82 14.4975 126.288 15.7611C125.823 17.0246 125.557 18.4212 125.557 19.9508C125.557 21.4803 125.823 22.8769 126.288 24.1404C126.754 25.404 127.485 26.5345 128.416 27.4655C129.347 28.3966 130.411 29.1281 131.675 29.6601C132.938 30.1921 134.335 30.4581 135.798 30.4581C137.461 30.4581 138.924 30.1921 140.187 29.5936C141.517 28.9951 142.581 28.1971 143.512 27.133C144.443 26.069 145.108 24.8054 145.441 23.3424H140.054C139.788 23.9409 139.456 24.4729 138.99 24.8719C138.525 25.271 138.059 25.537 137.527 25.7365C136.995 25.936 136.397 26.0025 135.732 26.0025C134.734 26.0025 133.803 25.7365 133.005 25.2709C132.207 24.8054 131.608 24.1404 131.143 23.2094C130.677 22.3448 130.478 21.2808 130.478 20.0173C130.478 18.8202 130.677 17.7562 131.143 16.8251C131.608 15.9606 132.207 15.2956 133.005 14.8301ZM159.805 14.0985H164.727V30.3251H159.805V27.9975C159.539 28.4631 159.14 28.8621 158.608 29.2611C158.143 29.6601 157.544 29.9261 156.879 30.1921C156.214 30.3916 155.483 30.5246 154.685 30.5246C153.355 30.5246 152.158 30.1921 151.094 29.4606C150.03 28.7956 149.165 27.798 148.5 26.5345C147.902 25.271 147.569 23.8079 147.569 22.0788C147.569 20.3498 147.902 18.8867 148.5 17.6232C149.099 16.3596 149.963 15.4286 151.094 14.7636C152.158 14.0985 153.421 13.766 154.751 13.766C155.549 13.766 156.281 13.899 156.946 14.0985C157.611 14.298 158.143 14.6306 158.608 14.9631C159.074 15.3621 159.473 15.7611 159.805 16.2266V14.0985ZM159.805 22.2118C159.805 21.3473 159.606 20.6158 159.273 20.0173C158.941 19.4187 158.475 18.9532 157.943 18.6207C157.411 18.2882 156.813 18.1552 156.148 18.1552C155.549 18.1552 154.951 18.2882 154.352 18.6207C153.82 18.9532 153.355 19.3522 153.022 19.9508C152.69 20.5493 152.49 21.2808 152.49 22.1453C152.49 23.0099 152.69 23.7414 153.022 24.4064C153.355 25.0049 153.82 25.4705 154.352 25.803C154.884 26.1355 155.483 26.2685 156.148 26.2685C156.813 26.2685 157.411 26.1355 157.943 25.803C158.475 25.4705 158.941 25.0049 159.273 24.4064C159.606 23.8079 159.805 23.0764 159.805 22.2118ZM187.071 6.98277C186.207 6.98277 185.475 7.24878 184.943 7.7808C184.411 8.31282 184.145 8.91134 184.145 9.70937C184.145 10.4409 184.411 11.1059 184.943 11.6379C185.475 12.17 186.207 12.436 187.071 12.436C187.936 12.436 188.601 12.17 189.2 11.6379C189.732 11.1059 189.998 10.5074 189.998 9.70937C189.998 8.97785 189.732 8.31282 189.2 7.7808C188.601 7.24878 187.936 6.98277 187.071 6.98277ZM227.505 17.7562C228.237 19.0197 228.636 20.4828 228.636 22.2118C228.636 23.9409 228.237 25.404 227.505 26.6675C226.773 27.931 225.709 28.8621 224.446 29.5936C223.182 30.2586 221.719 30.5911 220.123 30.5911C218.527 30.5911 217.131 30.2586 215.867 29.5936C214.604 28.9286 213.606 27.931 212.874 26.6675C212.143 25.404 211.744 23.9409 211.744 22.2118C211.744 20.4828 212.143 19.0197 212.874 17.7562C213.606 16.4926 214.604 15.5616 215.934 14.8966C217.197 14.2315 218.66 13.899 220.256 13.899C221.852 13.899 223.249 14.2315 224.512 14.8966C225.709 15.5616 226.773 16.4926 227.505 17.7562ZM223.581 22.2118C223.581 21.2808 223.448 20.4828 223.116 19.8842C222.783 19.2857 222.384 18.8202 221.852 18.5542C221.32 18.2882 220.788 18.0887 220.19 18.0887C219.591 18.0887 218.993 18.2217 218.527 18.5542C218.062 18.8867 217.596 19.2857 217.264 19.8842C216.931 20.4828 216.798 21.2808 216.798 22.2118C216.798 23.1429 216.931 23.9409 217.264 24.5394C217.596 25.1379 217.995 25.6035 218.461 25.8695C218.993 26.202 219.525 26.335 220.123 26.335C220.722 26.335 221.32 26.202 221.852 25.8695C222.384 25.537 222.783 25.1379 223.116 24.5394C223.448 23.8744 223.581 23.1429 223.581 22.2118ZM206.224 14.6971C205.293 14.165 204.163 13.899 202.899 13.899C201.968 13.899 201.103 14.032 200.372 14.3645C199.64 14.6971 198.975 15.0961 198.443 15.6281C198.244 15.8276 198.111 16.0271 197.978 16.2266V14.0985H193.057V30.3251H197.978V21.4803C197.978 20.6823 198.111 20.0838 198.377 19.5517C198.643 19.0197 198.975 18.6872 199.507 18.3547C199.973 18.0887 200.505 17.9557 201.17 17.9557C202.101 17.9557 202.899 18.2217 203.498 18.8202C204.096 19.4187 204.362 20.2833 204.362 21.4138V30.2586H209.217V20.8153C209.217 19.3522 208.951 18.0887 208.419 17.0911C207.887 16.0271 207.155 15.2291 206.224 14.6971ZM232.759 26.601C232.16 26.601 231.695 26.8005 231.296 27.133C230.897 27.4655 230.764 27.931 230.764 28.4631C230.764 28.9951 230.963 29.3941 231.296 29.7931C231.695 30.1256 232.16 30.3251 232.759 30.3251C233.357 30.3251 233.823 30.1256 234.155 29.7931C234.554 29.4606 234.687 28.9951 234.687 28.4631C234.687 27.931 234.488 27.532 234.155 27.133C233.823 26.8005 233.357 26.601 232.759 26.601ZM95.6306 24.3399L91.84 14.0985H86.3868L92.9705 29.7931L89.2464 38.0394H94.5001L104.675 14.0985H99.3547L95.6306 24.3399ZM79.67 22.6774L71.2907 9.84238H66.3695V30.3251H71.2907V17.5567L79.67 30.2586H84.5912V9.84238H79.67V22.6774ZM117.776 14.0985H122.697V30.3251H117.776V27.9975C117.51 28.4631 117.111 28.8621 116.579 29.2611C116.113 29.6601 115.515 29.9261 114.85 30.1921C114.185 30.3916 113.453 30.5246 112.655 30.5246C111.325 30.5246 110.128 30.1921 109.064 29.4606C108 28.7956 107.136 27.798 106.471 26.5345C105.872 25.271 105.539 23.8079 105.539 22.0788C105.539 20.3498 105.872 18.8867 106.471 17.6232C107.069 16.3596 107.934 15.4286 109.064 14.7636C110.128 14.0985 111.392 13.766 112.722 13.766C113.52 13.766 114.251 13.899 114.916 14.0985C115.581 14.298 116.113 14.6306 116.579 14.9631C117.044 15.3621 117.443 15.7611 117.776 16.2266V14.0985ZM117.776 22.2118C117.776 21.3473 117.576 20.6158 117.244 20.0173C116.911 19.4187 116.446 18.9532 115.914 18.6207C115.382 18.2882 114.783 18.1552 114.118 18.1552C113.52 18.1552 112.921 18.2882 112.323 18.6207C111.791 18.9532 111.325 19.3522 110.993 19.9508C110.66 20.5493 110.461 21.2808 110.461 22.1453C110.461 23.0099 110.66 23.7414 110.993 24.4064C111.325 25.0049 111.791 25.4705 112.323 25.803C112.855 26.1355 113.453 26.2685 114.118 26.2685C114.783 26.2685 115.382 26.1355 115.914 25.803C116.446 25.4705 116.911 25.0049 117.244 24.4064C117.643 23.8079 117.776 23.0764 117.776 22.2118ZM269.601 21.9458C269.601 22.2118 269.601 22.4113 269.601 22.6774C269.601 22.9434 269.535 23.1429 269.468 23.4089H258.163C258.229 24.0074 258.362 24.5394 258.562 24.9384C258.828 25.4705 259.227 25.8695 259.692 26.1355C260.158 26.4015 260.69 26.5345 261.288 26.5345C262.02 26.5345 262.618 26.4015 263.017 26.069C263.416 25.7365 263.749 25.404 263.948 24.9384H269.202C268.936 26.0025 268.471 26.9335 267.739 27.798C267.007 28.6626 266.143 29.3276 265.079 29.7931C264.015 30.2586 262.818 30.5246 261.488 30.5246C259.892 30.5246 258.495 30.1921 257.232 29.5271C255.968 28.8621 255.037 27.8645 254.305 26.601C253.574 25.3375 253.241 23.8744 253.241 22.1453C253.241 20.4163 253.574 18.9532 254.305 17.6897C254.97 16.4261 255.968 15.4951 257.165 14.8301C258.429 14.165 259.825 13.8325 261.421 13.8325C263.017 13.8325 264.414 14.165 265.611 14.8301C266.808 15.4951 267.805 16.4261 268.471 17.6232C269.269 18.8202 269.601 20.2833 269.601 21.9458ZM264.613 20.6158C264.613 20.1503 264.547 19.7512 264.347 19.4187C264.214 19.0862 263.948 18.7537 263.682 18.5542C263.416 18.2882 263.084 18.1552 262.685 18.0222C262.286 17.8892 261.887 17.8227 261.488 17.8227C260.823 17.8227 260.291 17.9557 259.825 18.2882C259.36 18.5542 258.961 19.0197 258.695 19.5517C258.495 19.8842 258.429 20.2833 258.362 20.6823H264.613V20.6158ZM249.451 22.0788C248.919 21.7463 248.32 21.4138 247.722 21.2143C247.123 21.0148 246.458 20.8153 245.86 20.6823C245.261 20.5493 244.663 20.4163 244.131 20.2168C243.599 20.0838 243.2 19.8842 242.867 19.6847C242.535 19.4852 242.402 19.1527 242.402 18.8202C242.402 18.5542 242.468 18.2882 242.601 18.1552C242.734 17.9557 242.934 17.8227 243.2 17.6897C243.466 17.5567 243.798 17.5567 244.197 17.5567C244.929 17.5567 245.461 17.7562 245.86 18.0887C246.259 18.4212 246.525 18.8867 246.591 19.4187H251.113C250.98 18.3547 250.648 17.3572 250.116 16.5591C249.584 15.7611 248.786 15.0961 247.855 14.6306C246.857 14.165 245.66 13.899 244.264 13.899C242.867 13.899 241.67 14.0985 240.672 14.5641C239.675 15.0296 238.943 15.6281 238.411 16.3596C237.879 17.0911 237.613 17.9557 237.613 18.8867C237.613 19.7512 237.746 20.4163 238.079 21.0148C238.411 21.6133 238.81 22.0788 239.342 22.4113C239.874 22.7439 240.406 23.0099 241.071 23.2094C241.67 23.4089 242.335 23.6084 243 23.7414C243.665 23.8744 244.197 24.0074 244.729 24.1404C245.261 24.2734 245.66 24.4729 245.993 24.6724C246.325 24.8719 246.458 25.2044 246.458 25.537C246.458 25.803 246.392 26.0025 246.192 26.202C246.059 26.4015 245.793 26.5345 245.527 26.6675C245.261 26.8005 244.862 26.867 244.397 26.867C243.732 26.867 243.133 26.6675 242.668 26.335C242.202 26.0025 241.936 25.537 241.87 24.9384H237.015C237.081 26.0025 237.414 26.9335 238.079 27.7315C238.677 28.5961 239.542 29.1946 240.672 29.7266C241.737 30.1921 243 30.4581 244.463 30.4581C245.793 30.4581 246.99 30.2586 247.988 29.7931C248.985 29.3276 249.717 28.7956 250.249 27.9975C250.781 27.266 251.047 26.4015 251.047 25.537C251.047 24.6724 250.847 23.9409 250.515 23.3424C250.448 22.8769 249.983 22.4113 249.451 22.0788ZM35.5124 11.904C38.9705 11.904 41.9631 14.032 43.1602 17.0911H53.8006C52.3375 7.58129 43.8252 0.532032 34.0493 0.99755C33.3178 0.99755 32.5198 0.99755 31.7882 1.06405C30.1922 1.19706 28.5961 1.46307 27.0666 1.92858C24.872 2.52711 22.8104 3.25863 20.7488 4.25617C19.6848 4.72169 18.6873 5.25371 17.6897 5.85223C17.0247 6.25124 16.3597 6.65026 15.6946 7.11578C15.7611 7.18228 15.7611 7.18228 15.7611 7.18228C17.1577 6.98277 18.5542 6.91627 19.9508 6.98277C21.2808 6.98277 22.6774 7.31528 23.9409 7.98031C24.5395 8.24632 25.138 8.64533 25.7365 8.97784C26.4015 9.44336 27.0666 9.97538 27.7981 10.5074C27.2661 10.5074 26.8671 10.5074 26.468 10.5074C25.936 10.5074 25.4705 10.5074 24.9385 10.5739C22.5444 10.8399 20.3498 11.904 18.2882 13.0345C17.0912 13.6995 15.8941 14.431 14.7636 15.2291C13.5001 16.0271 12.2365 16.6921 10.84 17.3572C8.84489 18.2882 6.71681 18.5542 4.52223 18.4212C3.52469 18.3547 2.52715 17.9557 1.59612 17.5567C1.1971 17.4237 0.864591 17.1576 0.465576 16.8916C0.532079 17.0911 0.598581 17.2242 0.665084 17.2907C0.864591 17.4902 1.0641 17.7562 1.26361 17.9557C2.46065 19.4852 3.99021 20.6158 5.71927 21.5468C6.84981 22.1453 8.11336 22.6774 9.37691 22.9434C10.5074 23.2094 11.5715 23.3424 12.7685 23.3424C13.9656 23.3424 15.0961 23.1429 16.2267 22.9434C17.0912 22.8104 17.9557 22.6109 18.8868 22.4778C20.0173 22.3448 21.2143 22.4778 22.2784 23.0764C22.8769 23.4089 23.3424 23.8079 23.7414 24.4064C24.473 25.6035 24.0074 27.3325 23.0099 28.3301C22.1454 29.1281 21.1478 29.5271 20.0173 29.6601C19.5518 29.7266 19.1528 29.7266 18.6207 29.7931C18.8203 30.1256 18.9533 30.3916 19.1528 30.6576C19.1528 30.7907 19.2193 30.9237 19.3523 31.1232C23.0099 36.3104 29.2611 39.569 36.0444 39.17C45.1552 38.6379 52.4705 31.7882 53.8006 23.0764H43.1602C41.9631 26.1355 39.037 28.2636 35.5124 28.2636C30.9902 28.2636 27.2661 24.6059 27.2661 20.0838C27.2661 15.5616 30.9902 11.904 35.5124 11.904Z" fill="#7ECD26"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_728">
                                <rect width="270" height="39.9015" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col8">
                <div class="menu">
                    <ul>
                        <li><a href="#">Casino på nett</a></li>
                        <li><a href="#">Freespins</a></li>
                        <li><a href="#">Nettcasino</a></li>
                        <li><a href="#">Casino bonus</a></li>
                    </ul>
                </div>
                <div class="hamburger" onclick="onMenuToggle(this,'.menu')">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
