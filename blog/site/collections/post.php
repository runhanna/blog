<?php

# All the visible posts
return function ($site) {
    return page()->parents()->children()->listed()->sortBy('published' , 'desc');
};