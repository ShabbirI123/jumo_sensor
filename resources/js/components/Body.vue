<template>
    <div id="body">
        <SideNavBar/>
        <Content/>
    </div>
</template>

<script>
import Content from "./Content";
import SideNavBar from "./SideNavBar";
export default {
    components: {
        Content,
        SideNavBar,
    }
}
</script>


