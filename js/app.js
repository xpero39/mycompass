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
                    activate: function() {
                        // Set action to active.
                        alert("It's active now.");
                    },
                    deactivate: function() {
                        // Deactivate action.
                        alert("Deactivated.");
                    },
                    reactivate: function() {
                        // Reactivate action.
                        alert("Reactivated.");
                    },

                    insert: function(section) {
                        switch (section) {
                            case 'goal':
                                axios.post('/php/insert.php', {
                                    section: section,
                                    data: gmessage,
                                })
                                .then(function (response) {
                                    console.log(response);
                                })
                                .catch(function (error) {
                                    console.log(error);
                                });
                                break;
                            case 'project':
                                axios.post('/php/insert.php', {
                                    section: section,
                                    data: pmessage,
                                })
                                .then(function (response) {
                                    console.log(response);
                                })
                                .catch(function (error) {
                                    console.log(error);
                                });
                                break;
                            case 'habit':
                                axios.post('/php/insert.php', {
                                    section: section,
                                    data: hmessage,
                                })
                                .then(function (response) {
                                    console.log(response);
                                })
                                .catch(function (error) {
                                    console.log(error);
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
