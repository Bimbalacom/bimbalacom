export default () => ({
    count: 0,
    query: '',
    apiSearchUrl: null,
    init() {
        const getUrl = window.location;
        this.apiSearchUrl = getUrl .protocol + "//" + getUrl.host +'/api/search?term=';
    },

    setQueryTerm(){
        const value = this.$refs.input.value;
        if(value.length > 1){
            this.query = value;
            //Make an API request to the endpoint
            fetch(this.apiSearchUrl+encodeURIComponent(value))
                .then(res => res.json())
                .then((data) => {
                    this.count = data.count;
                });

        }
    },

    closeSearchBar() {
        if(this.query && this.count !== 0){
            this.query = '';
            this.$refs.input.value = '';
        }
    },

    get queryFilter() {
        // Return filtered count
        // if query is not empty then check filter return the count which includes query string
        return this.query && this.count;
    },
})
