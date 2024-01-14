export default () => ({
    data: [],
    query: '',
    show: false,
    mobileMenuOpen: false,
    currentIndex: -1,
    apiSearchUrl: null,
    init() {
        const getUrl = window.location;
        this.apiSearchUrl = getUrl .protocol + "//" + getUrl.host +'/api/search?term=';
    },

    setQueryTerm(){
        const value = this.$refs.input.value;
        if(value.length > 1){
            this.query = value;
            //Make an API request to the Meilisearch endpoint
            fetch(this.apiSearchUrl+encodeURIComponent(value))
                .then(res => res.json())
                .then((data) => {
                    this.data = data.data;
                });
        }
    },

    showSearchBar() {
        // Show Searchbar
        this.show = true;
        this.query = ''

        // after showing focus in input
        this.$nextTick(() => {
            this.$refs.input.focus()
        })
    },
    closeSearchBar() {
        // Hide Searchbar
        this.show = false
        this.query = ''
        this.currentIndex = -1
    },
    get queryFilter() {
        // Return filtered items
        // if query is not empty then check filter return the items which includes query string
        return this.query && this.data;
    },
    previous() {
        // move cursor to previous item

        // if currentIndex is -1 dont execute
        if (this.currentIndex === -1)
            return

        this.currentIndex--

        // if index is less than 0 set the input value to the of query
        if (this.currentIndex < 0) {
            this.$nextTick(() => {
                // this will make cursor at the end of text
                this.$refs.input.focus()

                this.$refs.input.value = this.query
            })
            return
        }
        // set the input value to current filtered item value
        this.$nextTick(() => {
            // this will make cursor at the end of text
            this.$refs.input.focus()

            this.$refs.input.value = this.queryFilter[this.currentIndex].title
        })


        this.observer()
    },
    next() {
        // move cursor to next item

        // if currentIndex is last of filtered items then return
        if (this.currentIndex >= this.queryFilter.length - 1)
            return

        this.currentIndex++

        this.$refs.input.value = this.queryFilter[this.currentIndex].title

        this.observer()
    },
    observer() {
        // Observe if item is visible or not
        var element = document.getElementById(`item-${this.currentIndex}`)
        var parent = this.$refs.parent;


        const elementTop = element.offsetTop;
        const elementBottom = elementTop + element.clientHeight;

        const parentTop = parent.scrollTop;
        const parentBottom = parentTop + parent.clientHeight;

        // Scroll  bottom
        // triggered for this.next()
        if (elementBottom > parentBottom) {
            parent.scrollBy(0, 65)
        }
        // Scroll  Top
        // triggered for this.previous()
        if (elementTop < parentTop) {
            parent.scrollBy(0, -65)
        }
    },
    select(item = null) {
        if(item){
            window.location = item.url;
            return;
        }
        window.location = this.queryFilter[this.currentIndex].url;
    }
})
