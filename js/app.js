var app = new Vue ({
                el: '#app', 
                data: { 
                    gmessage:'New goal',
                    pmessage:'New project',
                    hmessage:'New habit',
                    fmessage:'New fear',
                    //Usable if you want to load data into VueJS 
                   /*  goals: ['Learn VueJS','Learn Algorithms','Learn best coding practices', 'Learn German'],
                    projects: [],
                    habits: [],
                    fears: [], */
                },
                
                methods: {
                    insert: function(section) {
                        switch (section) {
                            case 'goal':
                                axios({ //axios post
                                    method: 'post',
                                    url: 'insert.php',
                                    data: {
                                        section: section,
                                        data: this.gmessage,
                                    }
                                    .then(function (response) {
                                        console.log(response);
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    })
                                });
                                break;
                            case 'project':
                                axios({
                                    method: 'post',
                                    url: 'insert.php',
                                    data: {
                                        section: section,
                                        data: this.pmessage,
                                    }
                                    .then(function (response) {
                                        console.log(response);
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    })
                                });
                                break;
                            case 'habit':
                                axios({
                                    method: 'post',
                                    url: 'insert.php',
                                    data: {
                                        section: section,
                                        data: this.hmessage,
                                    }
                                    .then(function (response) {
                                        console.log(response);
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    })
                                });
                                break;
                            case 'fear':
                                axios({
                                    method: 'post',
                                    url: 'insert.php',
                                    data: {
                                        section: section,
                                        data: this.fmessage,
                                    }
                                    .then(function (response) {
                                        console.log(response);
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    })
                                });
                                break;
                            default: // No default action
                                break;
                        }
                    },

                }
 })
