<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
//print_r( $wbgSearchContent );
foreach ( $wbgSearchContent as $option_name => $option_value ) {
    if ( isset( $wbgSearchContent[$option_name] ) ) {
        ${"" . $option_name} = $option_value;
    }
}
?>
<form name="wbg_search_settings_form" role="form" class="form-horizontal" method="post" action="" id="wbg-search-settings-form">
<?php 
wp_nonce_field( 'wbg_search_content_action', 'wbg_search_content_nonce_field' );
?>
    <table class="wbg-search-settings-table">
        <tr class="wbg_display_search_panel">
            <th scope="row" style="text-align: right;">
                <label for="wbg_display_search_panel"><?php 
_e( 'Display Search Panel', 'wp-books-gallery' );
?>?</label>
            </th>
            <td>
                <input type="checkbox" name="wbg_display_search_panel" class="wbg_display_search_panel" id="wbg_display_search_panel" value="1" <?php 
echo ( '1' === $wbg_display_search_panel ? 'checked' : '' );
?>>
            </td>
        </tr>
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span>&nbsp;<?php 
_e( 'Search Items', 'wp-books-gallery' );
?></span><hr>
            </th>
        </tr>
        <?php 
$search_dad_list = $this->get_search_items();
foreach ( $search_dad_list as $search_item ) {
    //echo $search_item;
    if ( 'title' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_title">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_title"><?php 
        _e( 'Display Book Name', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_title" class="wbg_display_search_title" id="wbg_display_search_title" value="1" <?php 
        echo ( '1' === $wbg_display_search_title ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_search_title_placeholder"><?php 
        _e( 'Placeholder Text', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_display_search_title_placeholder" placeholder="<?php 
        _e( 'Book Name', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        esc_attr_e( $wbg_display_search_title_placeholder );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // title ends
    if ( 'isbn' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_isbn">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_isbn"><?php 
        _e( 'Display ISBN', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_isbn" class="wbg_display_search_isbn" id="wbg_display_search_isbn" value="1" <?php 
        echo ( $wbg_display_search_isbn ? 'checked' : '' );
        ?>>
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_search_isbn_placeholder"><?php 
        _e( 'Placeholder Text', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_display_search_isbn_placeholder" placeholder="<?php 
        _e( 'ISBN', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        esc_attr_e( $wbg_display_search_isbn_placeholder );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // isbn ends
    if ( 'category' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_category">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_category"><?php 
        _e( 'Display Category', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_category" class="wbg_display_search_category" id="wbg_display_search_category" value="1" <?php 
        echo ( '1' === $wbg_display_search_category ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_category_order"><?php 
        _e( 'Order By', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="radio" name="wbg_display_category_order" class="wbg_display_category_order" id="wbg_display_category_order_asc" value="asc" <?php 
        echo ( 'desc' !== $wbg_display_category_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_category_order_asc"><span></span><?php 
        _e( 'Ascending', 'wp-books-gallery' );
        ?></label>
                            &nbsp;&nbsp;
                        <input type="radio" name="wbg_display_category_order" class="wbg_display_category_order" id="wbg_display_category_order_desc" value="desc" <?php 
        echo ( 'desc' === $wbg_display_category_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_category_order_desc"><span></span><?php 
        _e( 'Descending', 'wp-books-gallery' );
        ?></label>
                    </td>
                    <th>
                        <label for="wbg_search_category_default"><?php 
        _e( 'Default Option', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_search_category_default" placeholder="<?php 
        _e( 'All Categories', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        echo esc_attr( $wbg_search_category_default );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // category ends
    if ( 'year' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_year">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_year"><?php 
        _e( 'Display Year', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_year" class="wbg_display_search_year" id="wbg_display_search_year" value="1" <?php 
        echo ( $wbg_display_search_year ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_year_order"><?php 
        _e( 'Order By', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="radio" name="wbg_display_year_order" class="wbg_display_year_order" id="wbg_display_year_order_asc" value="asc" <?php 
        echo ( 'desc' !== $wbg_display_year_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_year_order_asc"><span></span><?php 
        _e( 'Ascending', 'wp-books-gallery' );
        ?></label>
                            &nbsp;&nbsp;
                        <input type="radio" name="wbg_display_year_order" class="wbg_display_year_order" id="wbg_display_year_order_desc" value="desc" <?php 
        echo ( 'desc' === $wbg_display_year_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_year_order_desc"><span></span><?php 
        _e( 'Descending', 'wp-books-gallery' );
        ?></label>
                    </td>
                    <th>
                        <label for="wbg_search_year_default"><?php 
        _e( 'Default Option', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_search_year_default" placeholder="<?php 
        _e( 'All Years', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        esc_attr_e( $wbg_search_year_default );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // year ends
    if ( 'language' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_language">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_language"><?php 
        _e( 'Display Language', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_language" class="wbg_display_search_language" id="wbg_display_search_language" value="1" <?php 
        echo ( $wbg_display_search_language ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_language_order"><?php 
        _e( 'Order By', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="radio" name="wbg_display_language_order" class="wbg_display_language_order" id="wbg_display_language_order_asc" value="asc" <?php 
        echo ( 'desc' !== $wbg_display_language_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_language_order_asc"><span></span><?php 
        _e( 'Ascending', 'wp-books-gallery' );
        ?></label>
                            &nbsp;&nbsp;
                        <input type="radio" name="wbg_display_language_order" class="wbg_display_language_order" id="wbg_display_language_order_desc" value="desc" <?php 
        echo ( 'desc' === $wbg_display_language_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_language_order_desc"><span></span><?php 
        _e( 'Descending', 'wp-books-gallery' );
        ?></label>
                    </td>
                    <th>
                        <label for="wbg_search_language_default"><?php 
        _e( 'Default Option', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_search_language_default" placeholder="<?php 
        _e( 'All Languages', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        esc_attr_e( $wbg_search_language_default );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // language ends
    if ( 'author' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_author">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_author"><?php 
        _e( 'Display Author', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_author" class="wbg_display_search_author" id="wbg_display_search_author" value="1" <?php 
        echo ( '1' === $wbg_display_search_author ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_author_order"><?php 
        _e( 'Order By', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="radio" name="wbg_display_author_order" class="wbg_display_author_order" id="wbg_display_author_order_asc" value="asc" <?php 
        echo ( 'desc' !== $wbg_display_author_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_author_order_asc"><span></span><?php 
        _e( 'Ascending', 'wp-books-gallery' );
        ?></label>
                            &nbsp;&nbsp;
                        <input type="radio" name="wbg_display_author_order" class="wbg_display_author_order" id="wbg_display_author_order_desc" value="desc" <?php 
        echo ( 'desc' === $wbg_display_author_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_author_order_desc"><span></span><?php 
        _e( 'Descending', 'wp-books-gallery' );
        ?></label>
                    </td>
                    <th>
                        <label for="wbg_search_author_default"><?php 
        _e( 'Default Option', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_search_author_default" placeholder="<?php 
        _e( 'All Authors', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        echo esc_attr( $wbg_search_author_default );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    // author ends
    if ( 'publisher' === $search_item ) {
        ?>
                <tr class="wbg_list_item" id="wbg_search_sort_items_publisher">
                    <th scope="row" style="text-align: right;">
                        <label for="wbg_display_search_publisher"><?php 
        _e( 'Display Publisher', 'wp-books-gallery' );
        ?>?</label>
                    </th>
                    <td>
                        <input type="checkbox" name="wbg_display_search_publisher" class="wbg_display_search_publisher" id="wbg_display_search_publisher" value="1" <?php 
        echo ( '1' === $wbg_display_search_publisher ? 'checked' : '' );
        ?> >
                    </td>
                    <th style="text-align: right;">
                        <label for="wbg_display_publisher_order"><?php 
        _e( 'Order By', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="radio" name="wbg_display_publisher_order" class="wbg_display_publisher_order" id="wbg_display_publisher_order_asc" value="asc" <?php 
        echo ( 'desc' !== $wbg_display_publisher_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_publisher_order_asc"><span></span><?php 
        _e( 'Ascending', 'wp-books-gallery' );
        ?></label>
                            &nbsp;&nbsp;
                        <input type="radio" name="wbg_display_publisher_order" class="wbg_display_publisher_order" id="wbg_display_publisher_order_desc" value="desc" <?php 
        echo ( 'desc' === $wbg_display_publisher_order ? 'checked' : '' );
        ?> >
                        <label for="wbg_display_publisher_order_desc"><span></span><?php 
        _e( 'Descending', 'wp-books-gallery' );
        ?></label>
                    </td>
                    <th>
                        <label for="wbg_search_publishers_default"><?php 
        _e( 'Default Option', 'wp-books-gallery' );
        ?>:</label>
                    </th>
                    <td>
                        <input type="text" name="wbg_search_publishers_default" placeholder="<?php 
        _e( 'All Publishers', 'wp-books-gallery' );
        ?>" class="medium-text" value="<?php 
        esc_attr_e( $wbg_search_publishers_default );
        ?>">
                    </td>
                </tr>
                <?php 
    }
    apply_filters( 'wbg_admin_search_load_items', $search_item );
}
// foreach ( $search_dad_list as $search_item )
?>

        <?php 
do_action( 'wbg_admin_search_settings_before_search_button_text' );
?>

        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span>&nbsp;<?php 
_e( 'Search Button', 'wp-books-gallery' );
?></span><hr>
            </th>
        </tr>
        <tr class="wbg_cat_label_txt">
            <th scope="row" style="text-align: right;">
                <label for="wbg_search_btn_txt"><?php 
_e( 'Button Text', 'wp-books-gallery' );
?></label>
            </th>
            <td colspan="2">
                <input type="text" name="wbg_search_btn_txt" placeholder="<?php 
_e( 'Search Books', 'wp-books-gallery' );
?>" class="medium-text"
                    value="<?php 
esc_attr_e( $wbg_search_btn_txt );
?>">
            </td>
        </tr>
        <tr>
            <th scope="row" colspan="6" style="text-align: left;">
                <hr><span>&nbsp;<?php 
_e( 'Refresh Button', 'wp-books-gallery' );
?></span><hr>
            </th>
        </tr>
        <tr class="wbg_cat_label_txt">
            <th scope="row" style="text-align: right;">
                <label for="wbg_hide_refresh_btn"><?php 
_e( 'Hide Button', 'wp-books-gallery' );
?>?</label>
            </th>
            <td>
                <input type="checkbox" name="wbg_hide_refresh_btn" class="wbg_hide_refresh_btn" id="wbg_hide_refresh_btn" value="1" <?php 
echo ( $wbg_hide_refresh_btn ? 'checked' : '' );
?>>
            </td>
            <th scope="row" style="text-align: right;">
                <label for="wbg_refresh_btn_txt"><?php 
_e( 'Button Icon', 'wp-books-gallery' );
?></label>
            </th>
            <td>
                <input type="text" name="wbg_refresh_btn_txt" placeholder="<?php 
_e( 'Search Books', 'wp-books-gallery' );
?>" class="medium-text" value="<?php 
esc_attr_e( $wbg_refresh_btn_txt );
?>">
            </td>
            <th scope="row" style="text-align: right;">
                <label for="wbg_refresh_display_txt"><?php 
_e( 'Display as Text', 'wp-books-gallery' );
?>?</label>
            </th>
            <td>
                <input type="checkbox" name="wbg_refresh_display_txt" class="wbg_refresh_display_txt" id="wbg_refresh_display_txt" value="1" <?php 
echo ( $wbg_refresh_display_txt ? 'checked' : '' );
?>>
            </td>
        </tr>
    </table>
    <hr>
    <p class="submit">
        <button id="updateSearchContent" name="updateSearchContent" class="button button-primary wbg-button">
            <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php 
_e( 'Save Settings', 'wp-books-gallery' );
?>
        </button>
    </p>
</form>