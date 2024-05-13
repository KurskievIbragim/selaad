const photoColors = [
    '#0000fe',
    '#ff00fe',
    '#0ccdd1',
    '#6e63bb',
    '#fe0000',
]

let photoItems = document.getElementsByClassName('single-photo')

// Добавляем обработчики событий для каждого элемента
for (let i = 0; i < photoItems.length; i++) {
    photoItems[i].style.backgroundColor =  photoColors[i % photoColors.length];


}


