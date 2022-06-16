import Vue from "vue";

import Router from "vue-router";
import store from "./vuex";
import AdminLayout from "./views/admin/layout/index";

Vue.use(Router);

let router = new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("./views/home/index.vue")
        },
        {
            path: "/login/:user_id?",
            name: "login",
            component: () => import("./views/login/index.vue")
        },
        {
            path: "/register",
            name: "register",
            component: () => import("./views/register/index.vue")
        },
        {
            path: "/verify/user/:id",
            name: "verify",
            props: true,
            component: () => import("./views/verify/index.vue")
        },
        {
            path: "/forgot-password",
            name: "forgot",
            component: () => import("./views/forgot/index.vue")
        },
        {
            path: "/reset/:token",
            name: "reset",
            component: () => import("./views/reset/index.vue")
        },
        /**
         * Admin routes
         */
        {
            path: "/admin",
            name: "admin",
            component: () => import("./views/admin/dashboard.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        // Zones de couverture
        {
            path: "/admin/areas",
            name: "ListeAreas",
            component: () => import("./views/admin/areas/AllArea.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/areas/create",
            name: "CreateAreas",
            component: () => import("./views/admin/areas/CreateArea.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/areas/edit/:id",
            name: "EditAreas",
            component: () => import("./views/admin/areas/EditArea.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },

        // Secteur de couverture par client
        {
            path: "/admin/sectors",
            name: "ListeSectors", 
            component: () => import("./views/admin/sectors/AllSector.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/sectors/create",
            name: "CreateSectors",
            component: () => import("./views/admin/sectors/CreateSector.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/sectors/edit/:id",
            name: "EditSectors",
            component: () => import("./views/admin/sectors/EditSector.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },

        // Responsable de zone
        {
            path: "/admin/supervisors",
            name: "ListeSupervisors",
            component: () => import("./views/admin/supervisors/AllSupervisor.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/supervisors/create",
            name: "CreateSupervisor",
            component: () => import("./views/admin/supervisors/CreateSupervisor.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/supervisors/edit/:id",
            name: "EditSupervisors",
            component: () => import("./views/admin/supervisors/EditSupervisor.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },

        // Points de vente 
        {
            path: "/admin/pos",
            name: "ListePos",
            component: () => import("./views/admin/pos/AllPos.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/pos/create",
            name: "CreatePos",
            component: () => import("./views/admin/pos/CreatePos.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/pos/edit/:id",
            name: "EditPos",
            component: () => import("./views/admin/pos/EditPos.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },

        // Merchandisers 
        {
            path: "/admin/merchandisers",
            name: "ListeMerchandisers",
            component: () => import("./views/admin/merchandisers/AllMerchandiser.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/merchandisers/create",
            name: "CreateMerchandisers",
            component: () => import("./views/admin/merchandisers/CreateMerchandiser.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/merchandisers/edit/:id",
            name: "EditMerchandisers",
            component: () => import("./views/admin/merchandisers/EditMerchandiser.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },


        // Products 
        {
            path: "/admin/products",
            name: "ListeProducts",
            component: () => import("./views/admin/products/AllProduct.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/products/create",
            name: "CreateProducts",
            component: () => import("./views/admin/products/CreateProduct.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/products/edit/:id",
            name: "EditProducts",
            component: () => import("./views/admin/products/EditProduct.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },

        //routing
        //visites







        {
            path: "/admin/components/buttons",
            name: "buttons",
            component: () => import("./views/admin/buttons.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/components/cards",
            name: "cards",
            component: () => import("./views/admin/cards.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/utilities/colors",
            name: "colors",
            component: () => import("./views/admin/colors.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/utilities/borders",
            name: "borders",
            component: () => import("./views/admin/borders.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/utilities/animations",
            name: "animations",
            component: () => import("./views/admin/animations.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/utilities/other",
            name: "other",
            component: () => import("./views/admin/other.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/pages/page-not-found",
            name: "page-not-found",
            component: () => import("./views/admin/page-not-found.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/pages/blank",
            name: "blank",
            component: () => import("./views/admin/blank.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/charts",
            name: "charts",
            component: () => import("./views/admin/charts.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        },
        {
            path: "/admin/tables",
            name: "tables",
            component: () => import("./views/admin/tables.vue"),
            meta: {
                requiresAuth: true,
                layout: AdminLayout
            }
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.user) {
            next();
            return;
        }
        next("/login");
    } else {
        next();
    }
});

export default router;
