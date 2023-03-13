const _LAYOUT_SPINNER_LOADING =  ` <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                        </div>`

$('#in-account-value, #goals-value, #balance-value').html(_LAYOUT_SPINNER_LOADING)

const loadTotals = () => {
    fetch('./ajax/get_totals.php', {
        method: 'GET',
        async: true
    })
    .then(response => {
        return response.json()
    })
    .then((data) => {
        const goalsCount = data.goals;
        const spendingCount = data.spending;
        const balanceCount = data.balance;

        $('#in-account-value').html(balanceCount);
        $('#balance-value').html(spendingCount);
        $('#goals-value').html(goalsCount);
    })
}

loadTotals()




