class GridDatatable {
    init() {
        this.basicTableInit()
    }
    basicTableInit() {
        document.getElementById("table-gridjs")&&new gridjs.Grid( {
            columns:[ {
                name:"ID", formatter:function(e) {
                    return gridjs.html('<span class="fw-semibold">'+e+"</span>")
                }
            }
            , "Name", {
                name:"Email", formatter:function(e) {
                    return gridjs.html('<a href="">'+e+"</a>")
                }
            }
            , "Position", "Company", "Country", {
                name:"Actions", width:"120px", formatter:function(e) {
                    return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>Details</a>")
                }
            }
            ], pagination: {
                limit: 5
            }
            , sort: !0, search: !0, data:[["01", "Jonathan", "jonathan@example.com", "Senior Implementation Architect", "Hauck Inc", "Holy See"], ["02", "Harold", "harold@example.com", "Forward Creative Coordinator", "Metz Inc", "Iran"], ["03", "Shannon", "shannon@example.com", "Legacy Functionality Associate", "Zemlak Group", "South Georgia"], ["04", "Robert", "robert@example.com", "Product Accounts Technician", "Hoeger", "San Marino"], ["05", "Noel", "noel@example.com", "Customer Data Director", "Howell - Rippin", "Germany"], ["06", "Traci", "traci@example.com", "Corporate Identity Director", "Koelpin - Goldner", "Vanuatu"], ["07", "Kerry", "kerry@example.com", "Lead Applications Associate", "Feeney, Langworth and Tremblay", "Niger"], ["08", "Patsy", "patsy@example.com", "Dynamic Assurance Director", "Streich Group", "Niue"], ["09", "Cathy", "cathy@example.com", "Customer Data Director", "Ebert, Schamberger and Johnston", "Mexico"], ["10", "Tyrone", "tyrone@example.com", "Senior Response Liaison", "Raynor, Rolfson and Daugherty", "Qatar"]]
        }
        ).render(document.getElementById("table-gridjs")),
        document.getElementById("table-card")&&new gridjs.Grid( {
            columns:["Name", "Email", "Position", "Company", "Country"], sort: !0, pagination: {
                limit: 5
            }
            , data:[["Jonathan", "jonathan@example.com", "Senior Implementation Architect", "Hauck Inc", "Holy See"], ["Harold", "harold@example.com", "Forward Creative Coordinator", "Metz Inc", "Iran"], ["Shannon", "shannon@example.com", "Legacy Functionality Associate", "Zemlak Group", "South Georgia"], ["Robert", "robert@example.com", "Product Accounts Technician", "Hoeger", "San Marino"], ["Noel", "noel@example.com", "Customer Data Director", "Howell - Rippin", "Germany"], ["Traci", "traci@example.com", "Corporate Identity Director", "Koelpin - Goldner", "Vanuatu"], ["Kerry", "kerry@example.com", "Lead Applications Associate", "Feeney, Langworth and Tremblay", "Niger"], ["Patsy", "patsy@example.com", "Dynamic Assurance Director", "Streich Group", "Niue"], ["Cathy", "cathy@example.com", "Customer Data Director", "Ebert, Schamberger and Johnston", "Mexico"], ["Tyrone", "tyrone@example.com", "Senior Response Liaison", "Raynor, Rolfson and Daugherty", "Qatar"]]
        }
        ).render(document.getElementById("table-card"))
    }
}

document.addEventListener("DOMContentLoaded", function(e) {
    (new GridDatatable).init()
}

);
