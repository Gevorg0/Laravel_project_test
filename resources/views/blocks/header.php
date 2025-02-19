<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="blocks/header.css">
    <link rel="stylesheet" href="blocks/footer.css">
</head>
<header>
    <div class="parent_for_header">
        <div class="left_part">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <di class="parent_for_menu">
            <div class="menu">
                <div class="items_hover">
                    <a href="index.php">Homepage </a>
                </div>
                <div class="dropdown_menu">
                    <div class="dropdown_page">
                        <a href="index.php">Hompage1</a>
                    </div>
                    <div class="dropdown_page">
                        <a href="homepage2.php">Hompage2</a>
                    </div>
                </div>
            </div>
            <div class="menu_for_games">
                <div class="items_hover">
                    <a href="shop.php">Shop</a>
                </div>
                <div class="dropdown_menu">
                    <div class="dropdown_games">
                        <a href="xbox.php">Xbox</a>
                    </div>
                    <div class="dropdown_games">
                        <a href="games.php">Games</a>
                    </div>
                    <div class="dropdown_games">
                        <a href="Playstation.php">Plasttation</a>
                    </div>
                    <div class="dropdown_games">
                        <a href="xbox.php">Xbox</a>
                    </div>
                    <div class="dropdown_games">
                        <a href="pc.php">Pc</a>
                    </div>
                </div>
            </div>

            <ul class="product_items">
                <li class="dropdown_games">
                    <a href="news.php" class="active">News</a>
                </li>
                <li class="dropdown_games">
                    <a href="games.php">Games</a>
                </li>
                <li class="dropdown_games">
                    <a href="xbox.php">Xbox</a>
                </li>
                <li class="dropdown_games">
                    <a href="Playstation.php">Playstation</a>
                </li>
                <li class="dropdown_games">
                    <a href="pc.php">PC</a>
                </li>
            </ul>
    </div>
    </div>
    <div class="parent_search_click">
        <div class="search_click">
            <select name="All categories" id="categories">
                <option value="volvo">All categories</option>
                <option value="saab">Uncahtegorized</option>
                <option value="opel">Featured</option>
                <option value="audi">Games</option>
                <option value="saab">PC</option>
                <option value="opel">Plastation</option>
                <option value="audi">Xbox</option>
                <input type="text" placeholder="search">
                <button class="btn_for_search">Search</button>
            </select>
        </div>
    </div>
    <div class="right_part">
        <div class="svg_items">
            <!-- <svg width="28px" height="50px" viewBox="0 0 32 32" fill="white"
                            xmlns="http://www.w3.org/2000/svg">

                            <defs>
                            </defs>
                            <title />
                            <g id="cross">
                                <line class="cls-1" x1="7" x2="25" y1="7" y2="25" />
                                <line class="cls-1" x1="7" x2="25" y1="25" y2="7" />
                            </g>
                        </svg> -->
            <div><svg fill="#ffffff" class="search_svg" height="50px" width="28px" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 488.4 488.4" xml:space="preserve" stroke="#ffffff">

                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path
                                    d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z" />
                            </g>
                        </g>
                    </g>

                </svg></div>
            <div>
                <svg width="28px" height="50px" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14 5C13.4477 5 13 5.44772 13 6C13 6.27642 13.1108 6.52505 13.2929 6.70711C13.475 6.88917 13.7236 7 14 7C14.5523 7 15 6.55228 15 6C15 5.44772 14.5523 5 14 5ZM11 6C11 4.34315 12.3431 3 14 3C15.6569 3 17 4.34315 17 6C17 7.65685 15.6569 9 14 9C13.5372 9 13.0984 8.8948 12.7068 8.70744L10.7074 10.7068C10.8948 11.0984 11 11.5372 11 12C11 12.4628 10.8948 12.9016 10.7074 13.2932L12.7068 15.2926C13.0984 15.1052 13.5372 15 14 15C15.6569 15 17 16.3431 17 18C17 19.6569 15.6569 21 14 21C12.3431 21 11 19.6569 11 18C11 17.5372 11.1052 17.0984 11.2926 16.7068L9.29323 14.7074C8.90157 14.8948 8.46277 15 8 15C6.34315 15 5 13.6569 5 12C5 10.3431 6.34315 9 8 9C8.46277 9 8.90157 9.1052 9.29323 9.29256L11.2926 7.29323C11.1052 6.90157 11 6.46277 11 6ZM8 11C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13C8.27642 13 8.52505 12.8892 8.70711 12.7071C8.88917 12.525 9 12.2764 9 12C9 11.7236 8.88917 11.475 8.70711 11.2929C8.52505 11.1108 8.27642 11 8 11ZM14 17C13.7236 17 13.475 17.1108 13.2929 17.2929C13.1108 17.475 13 17.7236 13 18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18C15 17.4477 14.5523 17 14 17Z"
                        fill="#000000" />
                </svg></div>
            <div>
                <a href="register.php"><svg class="svg_hover" width="28px" height="50px" viewBox="0 0 24 24"
                        fill="white" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                        <defs></defs>
                        <circle class="cls-1" cx="12" cy="7.25" r="5.73" />
                        <path class="cls-1"
                            d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3,0,0,1,10.13,8.45l.37,2.05" />
                    </svg></a></div>
            <div>
                <svg width="28px" height="50px" viewBox="0 0 48 48" fill="white" id="Layer_2" data-name="Layer 2"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <style>
                        </style>
                    </defs>
                    <path class="cls-1"
                        d="M15.63,7.15A10.12,10.12,0,0,0,7.77,23.66h0L24,42.71,40.07,23.85l.08-.09.08-.1h0A10.13,10.13,0,1,0,24,11.58a10.1,10.1,0,0,0-8.36-4.43Z" />
                </svg>
            </div>
            <div class="cart_icon" onclick="addToCart(<?php echo $game['id']; ?>)">
                <svg width="28px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.15"
                        d="M4.97043 9.81038C5.06819 8.78391 5.93031 8 6.96142 8H17.0386C18.0697 8 18.9318 8.78391 19.0296 9.81038L19.7915 17.8104C19.9033 18.9846 18.9799 20 17.8005 20H6.19952C5.02004 20 4.0967 18.9846 4.20853 17.8104L4.97043 9.81038Z"
                        fill="#000000" />
                    <path
                        d="M16 8H17.1597C18.1999 8 19.0664 8.79732 19.1528 9.83391L19.8195 17.8339C19.9167 18.9999 18.9965 20 17.8264 20H6.1736C5.00352 20 4.08334 18.9999 4.18051 17.8339L4.84718 9.83391C4.93356 8.79732 5.80009 8 6.84027 8H8M16 8H8M16 8L16 7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7L8 8M16 8L16 12M8 8L8 12"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
</header>
<script>
        function addToCart(productId) {
            console.log('Adding product to cart:', productId);

            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'product_id=' + productId
            })
            .then(response => response.text())
            .then(data => {
                console.log('Response from server:', data);
                alert(data); // Notify user of the response
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>