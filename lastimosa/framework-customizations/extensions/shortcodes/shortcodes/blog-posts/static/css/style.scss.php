/* Blog Pages */
.blog-list {
	.content {
    overflow: hidden;
	}
	.thumbnail {
		box-shadow: unset;		
	}
	.thumbnail img {
		margin: 0 auto;
		display: block;
		height: auto;
		padding: 0 0 rem(8px) 0;
	}
	.btn.btn-default {
		background: #2189a5;
		border-radius: rem(8px);
		border: none;
		color: #fff;
		padding: rem(8px) rem(15px);
		text-shadow: unset;
		margin-top: rem(20px);
	}
	article:after {
		content: "";
		border-bottom: 1px solid #d7d7d7;
		width: 100%;
		margin: rem(30px) 0;
		clear:both;
		display:block;
	}
	article:last-of-type:after {
		content: "";
		border-bottom: none;
		padding-top: 0;
	}
	.pagination {
		display: block;
		.page-numbers {
			display: none;
		}
		.prev.page-numbers, .next.page-numbers {
   		display: block;
		}
		.prev {
			float: right;
		}
		.next {
			float: left;
		}
	}
	.numeric-pagination {
    display: block;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem;
		ul.page-numbers {
			padding: 0;
			margin: 0;
		}
		ul li {
			display: inline-block;
		}
		.page-numbers {
			position: relative;
			padding: .5rem .75rem;
			display: inline-block;
			margin: -3px;
			line-height: 1.25;
			color: #007bff;
			background-color: #fff;
			border: 1px solid #dee2e6;
					border-top-color: rgb(222, 226, 230);
					border-right-color: rgb(222, 226, 230);
					border-bottom-color: rgb(222, 226, 230);
					border-left-color: rgb(222, 226, 230);

			&:hover, &.current {
				color: #0056b3;
				text-decoration: none;
				background-color: #e9ecef;
				border-color: #dee2e6;
			}

			&:focus {
				z-index: 2;
				outline: 0;
				box-shadow: 0 0 0 .2rem rgba(0,123,255,.25);
			}

			// Opinionated: add "hand" cursor to non-disabled .page-link elements
			&:not(:disabled):not(.disabled) {
				cursor: pointer;
			}
		}


	}
}

@media (min-width: 768px) {
	article:after {
		margin: rem(30px) 0 rem(50px);
	}
	.blog-list {
		.thumbnail img {
			min-width: 0;
			min-height: 100%;
		}
		.offset-1-5 {
			margin-left: 20%;
		}
		.col-md-6 .alignleft, .col-md-6 .alignright {
			margin: 0;
		}
		article.post.hentry {
			margin-bottom: 1rem;
		}
		article:after {
			content: "";
			border-bottom: none;
		}
		.thumbnail img.aligncenter {
			min-width: 0;
		}
	}
}

#pbd-alp-load-posts a:link, #pbd-alp-load-posts a:visited {
	display: block;
	text-align: center;
	padding: 4px 0;
	color: #fff;
	text-decoration: none;
 
	/** Rounded Corners **/
	-moz-border-radius: 5px;
	border-radius: 5px;
 
	/** Drop shadow **/
	-moz-box-shadow: 1px 1px 1px #999;
	-webkit-box-shadow: 1px 1px 1px #999;
 
	/** Gradients : http://css-tricks.com/css3-gradients/ */
	/* fallback */
	background-color: #ff7200;
 
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(100% 100% 90deg, #ff7200, #ff7200);
 
	/* Safari 4-5, Chrome 1-9 */
	/* -webkit-gradient(<type>, <point> [, <radius>]?, <point> [, <radius>]? [, <stop>]*) */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ff7200), to(#ff7200));
 
	/* Safari 5.1+, Chrome 10+ */
	background: -webkit-linear-gradient(#ff7200, #ff7200);
 
	/* Opera 11.10+ */ background: -o-linear-gradient(#ff7200, #ff7200);
}
 
#pbd-alp-load-posts a:hover, #pbd-alp-load-posts a:active {
	/** Drop shadow **/
	-moz-box-shadow: 1px 1px 1px #bbb;
	-webkit-box-shadow: 1px 1px 1px #bbb;
	box-shadow: 1px 1px 1px #bbb;
 
	/** Gradients : http://css-tricks.com/css3-gradients/ */
	/* fallback */
	background-color: #f5f5f5;
 
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(100% 100% 90deg, #eaeaea, #f5f5f5);
 
	/* Safari 4-5, Chrome 1-9 */
	/* -webkit-gradient(<type>, <point> [, <radius>]?, <point> [, <radius>]? [, <stop>]*) */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f5f5f5), to(#eaeaea));
 
	/* Safari 5.1+, Chrome 10+ */
	background: -webkit-linear-gradient(#f1f1f1, #eaeaea);
 
	/* Opera 11.10+ */ background: -o-linear-gradient(#f5f5f5, #eaeaea);
}