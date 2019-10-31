<?php

# Listed pages to be displayed in the footer
return function ($site) {
    return page()->children()->listed()->sortBy('num' , 'asc');
};

