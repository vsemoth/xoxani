 <template lang='html'>
	<div class="chat-log">
		<p>{{message.message}}</p>
		<small>{{message.user.name}}</small>
		<hr>
	</div>
</template>

<script>
export default {
	props: ['message']
}
</script>

<style lang='css'>
.chat-log:nth-child(even) {
	background: #eee;
}

.empty {
	text-align: center;
	padding: 1rem;
	font-weight: bolder;
}
</style>