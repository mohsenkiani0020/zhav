import * as React from "react";
import {createRoot} from "react-dom/client";
import customTheme from './custom';
import {ThemeProvider} from "@mui/material";
import {BrowserRouter} from "react-router-dom";
import {QueryClient, QueryClientProvider} from "react-query";
import {ReactQueryDevtools} from "react-query/devtools";
import { Provider } from "react-redux";


console.log("App Tsx Root");

export default function App(props) {
    const lang = props.lang;
    const currentLang = props.currentLang;

    // Create a client
    const queryClient = new QueryClient({
        defaultOptions: {
            queries: {
                refetchOnWindowFocus: false,
                retry: 5,
                retryDelay: 3000,
                refetchInterval: 60000,
                cacheTime: 1000 * 60 * 60 * 24, // 24 hours
            },
        },
    });

    return (
        <>
            <ThemeProvider theme={customTheme}>
                <QueryClientProvider client={queryClient}>
                    <BrowserRouter>
                        <h1>User Panel</h1>
                    </BrowserRouter>
                    <ReactQueryDevtools initialIsOpen={false}/>
                </QueryClientProvider>
            </ThemeProvider>
        </>
    );
}

if (document.getElementById("app")) {
    const lang = document.getElementById("app").getAttribute("lang");
    const currentLang = document.getElementById("app").getAttribute("current-lang");
    createRoot(document.getElementById("app")).render(
            <App lang={lang} currentLang={currentLang}/>
    );
}
