<?php 
/*****************************************
*   License: GPLv3 or later
*   License URI: http://www.gnu.org/licenses/gpl-3.0.html
*   
*   Howling Dev Basic WordPress Theme, Copyright 2022 Dan Hunt
*   howling-dev-basic WordPress Theme, Copyright 2022 Dan Hunt
*   howling-dev-basic is distributed under the terms of the GNU GPL
*   
***********************************************************************
*   
*   This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*   
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
*   GNU General Public License for more details.
*   
*   You should have received a copy of the GNU General Public License
*   along with this program. If not, see < http://www.gnu.org/licenses/ >.
*       
***********************************************************************
*****************************************/
?>
<?php
// My custom comments output html
function howling_dev_basic_comments_callback( $comment, $args, $depth ) {

    // Get correct tag used for the comments
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    } ?>

    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">

    <?php
    // Switch between different comment types
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
        <div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'howling-dev-basic' ); ?></span> <?php comment_author_link(); ?></div>
    <?php
        break;
        default :

        if ( 'div' != $args['style'] ) { ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php } ?>
            <div class="comment-author vcard">
                <?php
                // Display avatar unless size is set to 0
                if ( $args['avatar_size'] != 0 ) {
                    $avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 70; // set default avatar size
                        echo get_avatar( $comment, $avatar_size );
                }
                // Display author name
                printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>', 'howling-dev-basic' ), get_comment_author_link() ); ?>
            </div><!-- .comment-author -->
            <div class="comment-details">
                <div class="comment-meta commentmetadata">
                    <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                        /* translators: 1: date, 2: time */
                        printf(
                            __( '%1$s at %2$s', 'howling-dev-basic' ),
                            get_comment_date(),
                            get_comment_time()
                        ); ?>
                    </a><?php
                    edit_comment_link( __( '(Edit)', 'howling-dev-basic' ), '  ', '' ); ?>
                </div><!-- .comment-meta -->
                <div class="comment-text"><?php comment_text(); ?></div><!-- .comment-text -->
                <?php
                // Display comment moderation text
                if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'howling-dev-basic' ); ?></em><br/><?php
                } ?>
                <div class="reply"><?php
                // Display comment reply link
                comment_reply_link( array_merge( $args, array(
                    'add_below' => $add_below,
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth']
                ) ) ); ?>
                </div>
            </div><!-- .comment-details -->
    <?php
        if ( 'div' != $args['style'] ) { ?>
            </div>
        <?php }
    // IMPORTANT: Note do NOT close the opening tag, WordPress does this
        break;
    endswitch; // End comment_type check.
}

 ?>

<style>
    /* form.css */
#respond {
    max-width: 697px;
}

#respond * {
    line-height: 1.5;
}

#reply-title {
    font-size: 2em;
}

.comment-form > p {
    display: flex;
    flex-direction: column;
}

#respond label {
    font-weight: 600;
    padding: 10px 0;
}

#respond input, #respond textarea {
  -webkit-appearance: none;
  width: 100%;
  max-width: 696px;
  padding: 0.8em;
  font-size: 0.9em;
  font-family: "Source Sans Pro", sans-serif;
  outline: none;
  border: 1px solid #dddddd;
  border-radius: 4px;
  background: #f9f9f9;
  transition: background 0.25s, border-color 0.25s, color 0.25s;
}

#respond input:focus, #respond textarea:focus {
  background: #ffffff;
  border: 3px solid #dddddd;
}

p.comment-form-cookies-consent {
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

#respond input[type="checkbox"] {
    width: 30px;
    height: 30px;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f9f9f9;
}

#respond input[type="checkbox"]:focus {
    border: 3px solid #dddddd;
    background: #ffffff;
}

#respond input[type="checkbox"]:checked::before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f00c";
}

#respond input[type="checkbox"]:checked {
    background: wheat;
}

input[type=checkbox] + label, input[type=radio] + label {
    padding-left: 20px !important;    
}

.form-submit input[type="submit"] {
    background-color: var(--primary-color) !important;
    color: white;
    border: 2px solid var(--secondary-color) !important;
    width: 50% !important;
}

.form-submit input[type="submit"]:hover, .form-submit input[type="submit"]:focus {
    background-color: white !important;
    color: var(--primary-color);
  border: 2px solid var(--secondary-color) !important;
  width: 50% !important;
}

@media only screen and (min-width: 992px) {
    #respond {
        max-width: 936px;
    }

    .comment-form > p:not(.comment-notes) {
        flex-flow: row wrap;
    }

    label {
        display: flex;
    }

    label span {
        margin-left: 1rem;
    }

    .comment-form > p:not(.comment-notes):not(.comment-form-cookies-consent) > * {
        flex: 1 1 100px;
    }

    .comment-form > p:not(.comment-notes):not(.comment-form-cookies-consent) > textarea,
    .comment-form > p:not(.comment-notes):not(.comment-form-cookies-consent) > input {
        flex: 1 1 600px;        
    }

    #respond .form-submit {
        width: 315px !important;
    }   
}


/* comments.css */
.comment-body {
    background-color: #f5f5f5;
    border: 5px #c0c0c0 double;
    border-radius: 25px;
    padding-bottom: 1.5em;
    margin: 3em 0;
}

.comment-body::after {
    content: "";
    clear: both;
    display: table; 
}

.comment-author {
    font-family: var(--heading-font);
    font-size: 1.5em;
}

.comment-meta {
    background-color: var(--primary-color);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding: 2em;
    font-family: var(--body-font);  
    color: white;
}

.avatar {
    margin-bottom: 1em;
}

.comment-meta a:link, .comment-meta a:visited {
    color: white;
}

.comment-meta a:active, .comment-meta a:hover {
    color: var(--secondary-color);
}

.says {
    display: none;
}

.comment-metadata {
    font-size: 10px;
    font-style: italic;
}

.comment-content {
    padding: 1.5em 2em 1em 2em;
}

li.comment::marker {
    content: '';
}

li.trackback, li.pingback {
    list-style-type: none;
}

.reply {
    margin: .5em 0 2em 2em;
}

.reply a.comment-reply-link { 
    text-align:center;
    background-color: var(--primary-color);
    border:  4px solid var(--secondary-color);
    border-radius: 5px;
    padding: 10px 16px;
    font-family: var(--body-font);
    font-weight: 600;
    font-size: 1.1em;
}

a.comment-reply-link,
a.comment-edit-link {
    color: #FFFFFF;
    text-decoration:none;
}
 
a.comment-reply-link:hover,
a.comment-edit-link:hover {
    color: var(--primary-color);
    background-color: #fff;
}

.bypostauthor .comment-body .comment-meta {
    background-color: var(--tertiary-color);
}

@media screen and (min-width: 576px) {
    .avatar {
        float: left;
        margin: 8px 1.5em 1em 0;
    }
}

</style>

<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php wp_list_comments(); ?>
                          
            </div>
        </div>

         <div class="row">
            <div class="col">
                <div class="col text-center">                    
                    <?php paginate_comments_links(); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php comment_form(); ?>                
            </div>
        </div>
        

    </div>    
</div>