<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="container">
        <div class="main-content">
            <div class="post-card">
                <img src="3073-screenshot.jpg" alt="Post Image" class="post-image">
                <div class="post-content">
                    <h2>Lorem Ipsum Dolor</h2>
                    <div class="post-info">
                        <span class="date"><i class="fa fa-calendar"></i>May 14, 2017</span> |
                        <span class="author"><i class="fa fa-user"></i>admin</span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur odit, necessitatibus accusantium assumenda accusamus unde atque nisi sint fuga rem, ut aut reprehenderit ad tempora quisquam? A id fuga recusandae!Lorem ...
                    </p>
                    <button class="read-more">Read More</button>
                </div>
            </div>
        </div>

        <aside class="sidebar">
            <div class="search-box">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>

            <div class="recent-posts">
                    <h3>Recent Posts<div class="unline"></div></h3>
                    
                
                <ul>
                    <li>Lorem ipsum dolor</li>
                    <li>Consectetur odit...</li>
                    <li>Lorem ipsum dolor</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>

            <div class="recent-comments">
                <h3>Recent Comments<div class="unline"></div></h3>
                <ul>
                    <li>Maria on Ninja Silhouette</li>
                    <li>Maria on Ship Your Idea</li>
                    <li>Maria on Woo Single #2</li>
                    <li>Maria on Happy Ninja</li>
                    <li>Ryan on Ninja Silhouette</li>
                </ul>
            </div>
        </aside>
    </div>