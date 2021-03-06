#!/usr/bin/php
<?php

$config = '{
    "extras": {
        "author": "author",
        "author_login": "author_login",
        "permalink": "permalink",
        "date": "date",
        "content": "content",
        "h1": "h1",
        "h2": "h2",
        "h3": "h3",
        "h4": "h4",
        "h5": "h5",
        "h6": "h6",
        "text": "text",
        "title": "title",
        "slug": "slug",
        "modified": "modified",
        "parent": "parent",
        "menu_order": "menu_order",
        "type": "type"
    },
    "app_id": "%APP_ID%",
    "search_key": "%SEARCH_KEY%",
    "admin_key": "%ADMIN_KEY%",
    "isCredentialsValid": null,
    "index_name": "%PREFIX%",
    "validCredential": true,
    "indexable_types": {
        "product": {
            "name": "Products",
            "order": 0,
            "autocompletable": 1,
            "instantable": 1,
            "nb_results_by_section": 3
        },
        "post": {
            "name": "Articles",
            "order": 1,
            "autocompletable": 1,
            "instantable": 1,
            "nb_results_by_section": 3
        },
        "page": {
            "name": "Pages",
            "order": 2,
            "autocompletable": 1,
            "instantable": 0,
            "nb_results_by_section": 3
        }
    },
    "indexable_tax": {
        "author": {
            "name": "Author",
            "order": "1",
            "facetable": 1,
            "type": "conjunctive"
        },
        "category": {
            "name": "Categories",
            "order": "2",
            "facetable": 1,
            "type": "menu"
        },
        "post_tag": {
            "name": "Tags",
            "order": "3",
            "facetable": 1,
            "type": "conjunctive"
        },
        "type": {
            "name": "Types",
            "order": "4",
            "facetable": 1,
            "type": "conjunctive"
        },
        "product_type": {
            "name": null,
            "order": "6",
            "facetable": 0,
            "type": null
        },
        "objectID": {
            "name": null,
            "order": "9",
            "facetable": 0,
            "type": null
        },
        "authorId": {
            "name": null,
            "order": "10",
            "facetable": 0,
            "type": null
        },
        "author_login": {
            "name": null,
            "order": "11",
            "facetable": 0,
            "type": null
        },
        "permalink": {
            "name": null,
            "order": "12",
            "facetable": 0,
            "type": null
        },
        "date": {
            "name": null,
            "order": "13",
            "facetable": 0,
            "type": null
        },
        "content": {
            "name": null,
            "order": "14",
            "facetable": 0,
            "type": null
        },
        "content_stripped": {
            "name": null,
            "order": "15",
            "facetable": 0,
            "type": null
        },
        "title": {
            "name": null,
            "order": "16",
            "facetable": 0,
            "type": null
        },
        "slug": {
            "name": null,
            "order": "17",
            "facetable": 0,
            "type": null
        },
        "modified": {
            "name": null,
            "order": "18",
            "facetable": 0,
            "type": null
        },
        "parent": {
            "name": null,
            "order": "19",
            "facetable": 0,
            "type": null
        },
        "menu_order": {
            "name": null,
            "order": "20",
            "facetable": 0,
            "type": null
        }
    },
    "conjunctive_facets": [],
    "disjunctive_facets": [],
    "metas": {
        "product": {
            "_price": {
                "name": "Price",
                "indexable": 1,
                "facetable": 1,
                "type": "slider",
                "order": "2",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            }
        },
        "post": [],
        "page": [],
        "tax": {
            "author": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "1",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "author_login": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "3",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "permalink": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "4",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "date": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "5",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "content": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "6",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h1": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "7",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h2": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "8",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h3": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "9",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h4": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "10",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h5": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "11",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "h6": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "12",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "text": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "13",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "title": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "14",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "slug": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "15",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "modified": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "16",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "parent": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "17",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "menu_order": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 0,
                "autocompletable": 0,
                "type": null,
                "order": "18",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "type": {
                "default_attribute": 1,
                "name": "",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 0,
                "type": "conjunctive",
                "order": "19",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "category": {
                "default_attribute": 0,
                "name": "Categories",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 1,
                "type": "conjunctive",
                "order": "20",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "post_tag": {
                "default_attribute": 0,
                "name": "Tags",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 1,
                "type": "conjunctive",
                "order": "21",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "product_tag": {
                "default_attribute": 0,
                "name": "",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 0,
                "type": "conjunctive",
                "order": "22",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "product_cat": {
                "default_attribute": 0,
                "name": "",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 0,
                "type": "conjunctive",
                "order": "23",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            },
            "pa_color": {
                "default_attribute": 0,
                "name": "",
                "indexable": 1,
                "facetable": 1,
                "autocompletable": 0,
                "type": "conjunctive",
                "order": "24",
                "custom_ranking": 0,
                "custom_ranking_sort": 10000,
                "custom_ranking_order": "asc"
            }
        }
    },
    "autocomplete": "1",
    "instant": "1",
    "instant_jquery_selector": "#content",
    "number_by_page": "10",
    "number_by_type": "3",
    "search_input_selector": "[name=\\"s\\"]",
    "template": "woo",
    "date_custom_ranking": {
        "sort": 10000,
        "enabled": true,
        "order": "desc"
    },
    "searchable": {
        "title": {
            "ordered": "ordered",
            "order": 0
        },
        "h1": {
            "ordered": "ordered",
            "order": 1
        },
        "h2": {
            "ordered": "ordered",
            "order": 2
        },
        "h3": {
            "ordered": "ordered",
            "order": 3
        },
        "h4": {
            "ordered": "ordered",
            "order": 4
        },
        "h5": {
            "ordered": "ordered",
            "order": 5
        },
        "h6": {
            "ordered": "ordered",
            "order": 6
        },
        "text": {
            "ordered": "unordered",
            "order": 7
        },
        "content": {
            "ordered": "unordered",
            "order": 8
        }
    },
    "sortable": [],
    "number_of_word_for_content": 30,
    "last_update": 1434960441,
    "enable_truncating": true,
    "truncate_size": "9000",
    "excluded_types": ["revision", "nav_menu_item", "acf", "product_variation", "shop_order", "shop_order_refund", "shop_coupon", "shop_webhook", "wooframework"]
}';

$config = str_replace('%APP_ID%', $argv[1], $config);
$config = str_replace('%SEARCH_KEY%', $argv[2], $config);
$config = str_replace('%ADMIN_KEY%', $argv[3], $config);
$config = str_replace('%PREFIX%', $argv[4], $config);

$config = json_decode($config, true);

$config['instant_jquery_selector'] = str_replace('"', '\'', $config['instant_jquery_selector']);
$config['search_input_selector'] = str_replace('"', '\'', $config['search_input_selector']);



echo mysqli_real_escape_string(mysqli_connect("localhost", "root", "P4ssw0rd", "wordpress"), serialize($config));