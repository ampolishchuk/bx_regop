$(document).ready(function() {
    $('.districts-list').each(function() {
        const disctricts = $(this);

         disctricts.find('.districts-list-item').each(function() {
            const item = $(this);
            const itemName = item.text().trim();
            const districtsID = item.attr('data-map');
            const districtsPath = disctricts.find(".districts-path[id='" + districtsID + "']").get(0);
            const districtsTitle = document.createElement('title')
            districtsTitle.text = itemName;

            BX.append(districtsTitle, districtsPath)

         })

         disctricts.html(disctricts.html())
        
        disctricts.find('.districts-path').each(function() {
            disctricts.find('.districts-path').click(function() {
                const districtsID = $(this).attr('id');
                const districtsItem = disctricts.find('.districts-list-item[data-map="' + districtsID + '"]');

                window.open(districtsItem.attr('href'), '_self');
            })

            disctricts.find('.districts-path').mouseover(function() {
                const districtsID = $(this).attr('id');
                const districtsItem = disctricts.find('.districts-list-item[data-map="' + districtsID + '"]');

                districtsItem.addClass('hover');
            })
            
            disctricts.find('.districts-path').mouseout(function() {
                const districtsID = $(this).attr('id');
                const districtsItem = disctricts.find('.districts-list-item[data-map="' + districtsID + '"]');

                districtsItem.removeClass('hover');
            })
            
            disctricts.find('.districts-list-item').mouseover(function() {
                const districtsID = $(this).attr('data-map');
                const districtsPath = disctricts.find(".districts-path[id='" + districtsID + "']").get(0);

                districtsPath.classList.add('hover')
            })

            disctricts.find('.districts-list-item').mouseout(function() {
                const districtsID = $(this).attr('data-map');
                const districtsPath = disctricts.find(".districts-path[id='" + districtsID + "']").get(0);

                districtsPath.classList.remove('hover')
            })
        });
    })		
});