<?php

# All the visible posts
return function ($site) {
    return site()->page()->children()->listed()->sortBy('published' , 'desc');
};