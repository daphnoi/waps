import AppLayout from '@/Layouts/AppLayout.vue';
import { __VLS_internalComponent, __VLS_componentsOption, __VLS_name } from './Dashboard.vue';

function __VLS_template() {
let __VLS_ctx!: InstanceType<__VLS_PickNotAny<typeof __VLS_internalComponent, new () => {}>> & {};
/* Components */
let __VLS_otherComponents!: NonNullable<typeof __VLS_internalComponent extends { components: infer C; } ? C : {}> & typeof __VLS_componentsOption;
let __VLS_own!: __VLS_SelfComponent<typeof __VLS_name, typeof __VLS_internalComponent & (new () => { $slots: typeof __VLS_slots; })>;
let __VLS_localComponents!: typeof __VLS_otherComponents & Omit<typeof __VLS_own, keyof typeof __VLS_otherComponents>;
let __VLS_components!: typeof __VLS_localComponents & __VLS_GlobalComponents & typeof __VLS_ctx;
/* Style Scoped */
type __VLS_StyleScopedClasses = {};
let __VLS_styleScopedClasses!: __VLS_StyleScopedClasses | keyof __VLS_StyleScopedClasses | (keyof __VLS_StyleScopedClasses)[];
/* CSS variable injection */
/* CSS variable injection end */
let __VLS_resolvedLocalAndGlobalComponents!: {} &
__VLS_WithComponent<'AppLayout', typeof __VLS_localComponents, "AppLayout", "AppLayout", "AppLayout">;
__VLS_components.AppLayout; __VLS_components.AppLayout;
// @ts-ignore
[AppLayout, AppLayout,];
__VLS_intrinsicElements.template; __VLS_intrinsicElements.template;
__VLS_intrinsicElements.h2; __VLS_intrinsicElements.h2;
__VLS_intrinsicElements.div; __VLS_intrinsicElements.div; __VLS_intrinsicElements.div; __VLS_intrinsicElements.div;
{
const __VLS_0 = ({} as 'AppLayout' extends keyof typeof __VLS_ctx ? { 'AppLayout': typeof __VLS_ctx.AppLayout; } : typeof __VLS_resolvedLocalAndGlobalComponents).AppLayout;
const __VLS_1 = __VLS_asFunctionalComponent(__VLS_0, new __VLS_0({ ...{}, title: ("Dashboard"), }));
({} as { AppLayout: typeof __VLS_0; }).AppLayout;
({} as { AppLayout: typeof __VLS_0; }).AppLayout;
const __VLS_2 = __VLS_1({ ...{}, title: ("Dashboard"), }, ...__VLS_functionalComponentArgsRest(__VLS_1));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_0, typeof __VLS_2> & Record<string, unknown>) => void)({ ...{}, title: ("Dashboard"), });
const __VLS_3 = __VLS_pickFunctionalComponentCtx(__VLS_0, __VLS_2)!;
let __VLS_4!: __VLS_NormalizeEmits<typeof __VLS_3.emit>;
{
const __VLS_5 = __VLS_intrinsicElements["template"];
const __VLS_6 = __VLS_elementAsFunctionalComponent(__VLS_5);
const __VLS_7 = __VLS_6({ ...{}, }, ...__VLS_functionalComponentArgsRest(__VLS_6));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_5, typeof __VLS_7> & Record<string, unknown>) => void)({ ...{}, });
{
(__VLS_3.slots!).header;
{
const __VLS_8 = __VLS_intrinsicElements["h2"];
const __VLS_9 = __VLS_elementAsFunctionalComponent(__VLS_8);
const __VLS_10 = __VLS_9({ ...{}, class: ("font-semibold text-xl text-gray-800 leading-tight"), }, ...__VLS_functionalComponentArgsRest(__VLS_9));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_8, typeof __VLS_10> & Record<string, unknown>) => void)({ ...{}, class: ("font-semibold text-xl text-gray-800 leading-tight"), });
const __VLS_11 = __VLS_pickFunctionalComponentCtx(__VLS_8, __VLS_10)!;
let __VLS_12!: __VLS_NormalizeEmits<typeof __VLS_11.emit>;
(__VLS_11.slots!).default;
}
}
}
{
const __VLS_13 = __VLS_intrinsicElements["div"];
const __VLS_14 = __VLS_elementAsFunctionalComponent(__VLS_13);
const __VLS_15 = __VLS_14({ ...{}, class: ("bg-white-900"), }, ...__VLS_functionalComponentArgsRest(__VLS_14));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_13, typeof __VLS_15> & Record<string, unknown>) => void)({ ...{}, class: ("bg-white-900"), });
const __VLS_16 = __VLS_pickFunctionalComponentCtx(__VLS_13, __VLS_15)!;
let __VLS_17!: __VLS_NormalizeEmits<typeof __VLS_16.emit>;
{
const __VLS_18 = __VLS_intrinsicElements["div"];
const __VLS_19 = __VLS_elementAsFunctionalComponent(__VLS_18);
const __VLS_20 = __VLS_19({ ...{}, }, ...__VLS_functionalComponentArgsRest(__VLS_19));
({} as (props: __VLS_FunctionalComponentProps<typeof __VLS_18, typeof __VLS_20> & Record<string, unknown>) => void)({ ...{}, });
const __VLS_21 = __VLS_pickFunctionalComponentCtx(__VLS_18, __VLS_20)!;
let __VLS_22!: __VLS_NormalizeEmits<typeof __VLS_21.emit>;
}
(__VLS_16.slots!).default;
}
}
if (typeof __VLS_styleScopedClasses === 'object' && !Array.isArray(__VLS_styleScopedClasses)) {
}
var __VLS_slots!: {};
return __VLS_slots;
}
