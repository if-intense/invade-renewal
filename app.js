const messages = {
    en: {
        header: {
            title: "Website"
        },
        main: {
            greeting: "{name}, Hi!",
            image: {
                text: "fake image",
                font: "lobster"
            },
            sheep: "no sheep | 1 sheep | {value} sheeps"
        }
    },
    tw: {
        header: {
            title: "網站"
        },
        main: {
            greeting: "{name}，你好！",
            image: {
                text: "假圖",
                font: "noto"
            },
            sheep: "沒有綿羊 | 1 隻綿羊 | {value} 隻綿羊"
        }
    },
    jp: {
        header: {
            title: "サイト"
        },
        main: {
            greeting: "{name}さん、こんにちは",
            image: {
                text: "フェイク",
                font: "noto"
            },
            sheep: "羊がない | 羊 1 匹 | 羊 {value} 匹"
        }
    }
};
const i18n = new VueI18n({ messages: messages });
let app = new Vue({
    el: "#lang",
    i18n: i18n,
    data: {
        locale: localStorage.getItem("locale") || "tw"
    },
    methods: {
        changeLocale: function() {
            this.$i18n.locale = this.locale;
            console.log(this.$t("header.title"));
            localStorage.setItem("locale", this.locale);
        }
    },
    created() {
        this.$i18n.locale = this.locale;
    }
});
