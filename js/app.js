var app = new Vue ({
                el: '#app', 
                data: { 
                    gmessage:'New goal',
                    pmessage:'New project',
                    hmessage:'New habit',
                    fmessage:'New fear',
                    //Usable if you want to load data into VueJS
                    goals: ['Learn VueJS','Learn Algorithms','Learn best coding practices', 'Learn German'],
                    projects: [],
                    habits: [],
                    fears: [],
                },
                
                methods: {
                    insert: function(section) {
                        
                        //axios post
                        axios({
                        method: 'post',
                        url: 'insert.php',
                        data: {
                           section: section,
                           
                        }
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                        });
                        
                        //old jquery ajax
                        /* $.ajax({
                            type: "POST",
                            url: "insert.php",
                            data: ''+string+'',
                            success : function(text){
                                if (text != ""){
                                    formGenericSuccess(text,formID);
                                }
                            }
                        }); */

                    },

                }
 })
