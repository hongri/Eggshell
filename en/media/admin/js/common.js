var jq={bind:function(a,b,c,d){return b=="click"&&a.attr("href","javascript: void(0);"),a.bind(b,c,d),a},click:function(a,b){return a.attr("href","javascript: void(0);"),a.click(b),a},hover:function(a,b,c){return a.attr("href","javascript: void(0);"),a.hover(b,c),a},$:{div:function(a){return $("<div>").addClass(a)}},$$:function(a,b){return $("<"+a+">").addClass(b)}}