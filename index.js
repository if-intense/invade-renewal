// 1. Ready translated locale messages
// The structure of the locale message is the hierarchical object structure with each locale as the top property
const messages = {
    en: {
      message: {
        hello: 'hello world'
      },
      company: {
        title: 'INVADE Co., Ltd.'
      }

    },
    ja: {
      message: {
        hello: 'こんにちは、世界'
      },
      company: {
        title: 'インベード株式会社'
      }
    }
  }
  
  // 2. Create i18n instance with options
  const i18n = VueI18n.createI18n({
    locale: 'ja', // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
    // If you need to specify other options, you can set other options
    // ... 
  })
  
 
  
  // 3. Create a vue root instance
  const app = Vue.createApp({
    // set something options
    // ...
  })
  
  // 4. Install i18n instance to make the whole app i18n-aware
  app.use(i18n)
  
  // 5. Mount
  app.mount('#app')
  
  // Now the app has started!