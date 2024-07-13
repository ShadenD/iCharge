function changeContent(card) {
    var header = card.querySelector('h2').textContent;
    var subheader = card.querySelector('h3').textContent;
    var details = card.querySelector('p').textContent;

    var dynamicContent = document.getElementById('dynamic-content');
    dynamicContent.innerHTML = `
        <h1>${header}</h1>
        <h3>${subheader}</h3>
        <p>${details}</p>
    `;
}

// Function to swap cards in the same row
function swapCards(card) {
    var row = card.parentElement;
    var cards = row.querySelectorAll('.card46');

    // Find the clicked card's index
    var index = Array.from(cards).indexOf(card);

    // Swap with the next card in the row (if exists)
    if (index < cards.length - 1) {
        row.insertBefore(cards[index + 1], card);
    }
}