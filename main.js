const root = new Vue ({
    el: '#root',
    data: {
        discs: [],
        genres: [],
        selectedGenre: '',
        filteredDiscs: []
    },
    mounted() {
        this.addDiscs();
        this.filterGenre();
    },
    methods: {
        addDiscs() {
            axios.get('http://localhost/php-ajax-dischi/api.php')
            .then(response => {
                // popola array discs
                this.discs = response.data;

                //popola array genres
                this.discs.forEach(disc => {
                    if (!this.genres.includes(disc.genre)) {
                        this.genres.push(disc.genre);
                    }
                });
                
                // handle success
                console.log(response);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
        },

        filterGenre() {
            axios.get('http://localhost/php-ajax-dischi/api.php')
            .then(response => {
                if(this.selectedGenre == "") {
                    this.filteredDiscs = this.discs;
                } else {
                    this.filteredDiscs = this.discs.filter(disc => {
                        if(disc.genre.includes(this.selectedGenre)) {
                            return true;
                        }
                        return false;
                    });
                    
                }
                // handle success
                console.log(response);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
        }
    }
});